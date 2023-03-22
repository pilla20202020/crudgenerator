<?php
namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\Country;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Service\CommonModelService;
use Log;
use Illuminate\Support\Facades\Storage;
use Exception;
use \PDF;
use Illuminate\Support\Str;

class CountryController extends Controller
{
    protected $modelService;
    public function __construct(Country $model)
    {
        $this->modelService = new CommonModelService($model);
    }
    public function index(Request $request)
    {
        createActivityLog(CountryController::class, 'index', 'Master State index');

        $data = Country::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            $html = view("dftqc.master.country.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("dftqc.master.country.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {
        createActivityLog(CountryController::class, 'create', 'Master State create');

        if ($request->ajax()) {
            $html = view("dftqc.master.country.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("dftqc.master.country.create");
    }

    public function store(Request $request)
    {
        createActivityLog(CountryController::class, 'store', 'Master Country store');

        $validator = Validator::make($request->all(), [
            'countryName' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }
        $request->request->add(['alias' => slugify($request->countryName)]);
        DB::beginTransaction();
        try {
            $operationNumber = getOperationNumber();
            $country = $this->modelService->create($operationNumber, $operationNumber, null, $request->all());
            $pdf = PDF::loadView('export.exportpdf', [
                'sn' => '1',
                'data' => $country->countryName,
            ]);
            $filename = 'public/country/' . '-' . rand() . '.' . 'pdf';
            $pdf = Storage::put($filename, $pdf->output());
            $newfilename = Str::replace("public", "", $filename);
            $country['pdf'] = $newfilename;
            $country->save();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            createErrorLog(CountryController::class, 'store', $e->getMessage());
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
        DB::commit();
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
        }
        return redirect()->route('master.country.index')->with('success', 'The Country created Successfully.');
    }

    public function show(Request $request, $id)
    {
        createActivityLog(CountryController::class, 'show', 'Master State show');

        $data = Country::findOrFail($id);
        if ($request->ajax()) {
            $html = view("dftqc.master.country.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("dftqc.master.country.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        createActivityLog(CountryController::class, 'edit', 'Master State edit');

        $data = Country::findOrFail($id);
        if ($request->ajax()) {
            $html = view("dftqc.master.country.ajax.edit", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("dftqc.master.country.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        createActivityLog(CountryController::class, 'update', 'Master Country update');

        $validator = Validator::make($request->all(), [
            'countryName' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }
        $request->request->add(['alias' => slugify($request->countryName)]);
        DB::beginTransaction();
        try {
            $OperationNumber = getOperationNumber();
            $data = $this->modelService->update($OperationNumber, $OperationNumber, null, $request->all(), $id);
            $newfilename = $data->pdf;
            // $newfilename = Str::replace("public", "", $data->pdf);

            if (Storage::exists('public/' .$newfilename)) {
                Storage::delete('public/' .$newfilename);
            }
            
            $pdf = PDF::loadView('export.exportpdf', [
                'sn' => '1',
                'data' => $request['countryName'],
            ]);
            $filename = 'public/country/' . '-' . rand() . '.' . 'pdf';
            $pdf = Storage::put($filename, $pdf->output());
            $newfilename = Str::replace("public", "", $filename);
            $data['pdf'] = $newfilename;
            $data->save();


        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            createErrorLog(CountryController::class, 'update', $e->getMessage());
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
        DB::commit();
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
        }
        return redirect()->route('master.country.index')->with('success', 'The Country updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        createActivityLog(CountryController::class, 'destroy', 'Master Country destroy');

        DB::beginTransaction();
        try {
            $OperationNumber = getOperationNumber();
            $this->modelService->destroy($OperationNumber, $OperationNumber, $id);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            createErrorLog(CountryController::class, 'destroy', $e->getMessage());
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
        DB::commit();
        return response()->json(['status' => true, 'message' => 'The Country Deleted Successfully.'], 200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = Country::where('status', '<>', -1)->get();
                return view("dftqc.master.country.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("dftqc.master.country.ajax.create")->render();
                break;
            case 'edit':
                $data = Country::findOrFail($id);
                return view("dftqc.master.country.ajax.edit", compact('data'))->render();
                break;
            default:
                return 'Not Found';
        }
    }

    public function api(Request $request, $action, $authCode = null)
    {
        $id = $request->primary_id;

        $route = $request->route()->uri;
        $route = explode('/', $route);
        if ($route[0] == 'api') {
            switch ($action) {
                case 'index':
                    $data = Country::where('status', '<>', -1)->get();
                    $html = view("dftqc.master.country.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    Country::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = Country::findOrFail($id);
                    $html = view("dftqc.master.country.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = Country::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = Country::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The Country Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }
}