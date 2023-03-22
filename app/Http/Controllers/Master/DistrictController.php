<?php
namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\District;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Service\CommonModelService;
use Log;
use Exception;

class DistrictController extends Controller
{
    protected $modelService;
    public function __construct(District $model)
    {
        $this->modelService = new CommonModelService($model);
    }
    public function index(Request $request)
    {
        createActivityLog(DistrictController::class, 'index', 'Master District index');
        $data = District::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            $html = view("dftqc.master.district.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("dftqc.master.district.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {
        createActivityLog(DistrictController::class, 'create', 'Master District create');
        if ($request->ajax()) {
            $html = view("dftqc.master.district.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("dftqc.master.district.create");
    }

    public function store(Request $request)
    {
        createActivityLog(DistrictController::class, 'store', 'Master District store');
        $validator = Validator::make($request->all(), [
            'districtName' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ],500);
        }
        $request->request->add(['alias' => slugify($request->districtName)]);
        DB::beginTransaction();
        try {
            $operationNumber = getOperationNumber();
            $this->modelService->create($operationNumber, $operationNumber, null, $request->all());
        } catch (\Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            createErrorLog(DistrictController::class, 'store', $e->getMessage());
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
        DB::commit();
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The District Created Successfully.'], 200);
        }
        return redirect()->route('master.district.index')->with('success', 'The District created Successfully.');
    }

    public function show(Request $request, $id)
    {
        createActivityLog(DistrictController::class, 'show', 'Master District show');
        $data = District::findOrFail($id);
        if ($request->ajax()) {
            $html = view("dftqc.master.district.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("dftqc.master.district.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        createActivityLog(DistrictController::class, 'edit', 'Master District edit');
        $data = District::findOrFail($id);
        if ($request->ajax()) {
            $html = view("dftqc.master.district.ajax.edit", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("dftqc.master.district.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        createActivityLog(DistrictController::class, 'update', 'Master District update');
        $validator = Validator::make($request->all(), [
            'districtName' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ],500);
        }
        $request->request->add(['alias' => slugify($request->districtName)]);
        DB::beginTransaction();
        try {
            $OperationNumber = getOperationNumber();
            $this->modelService->update($OperationNumber, $OperationNumber, null, $request->all(), $id);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            createErrorLog(DistrictController::class, 'update', $e->getMessage());
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
        DB::commit();
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The District updated Successfully.'], 200);
        }
        return redirect()->route('master.district.index')->with('success', 'The District updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        createActivityLog(DistrictController::class, 'destroy', 'Master District destroy');

        DB::beginTransaction();
        try {
            $OperationNumber = getOperationNumber();
            $this->modelService->destroy($OperationNumber, $OperationNumber, $id);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            createErrorLog(DistrictController::class, 'destroy', $e->getMessage());
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
        DB::commit();
        return response()->json(['status' => true, 'message' => 'The District Deleted Successfully.'], 200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = District::where('status', '<>', -1)->get();
                return view("dftqc.master.district.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("dftqc.master.district.ajax.create")->render();
                break;
            case 'edit':
                $data = District::findOrFail($id);
                return view("dftqc.master.district.ajax.edit", compact('data'))->render();
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
                    $data = District::where('status', '<>', -1)->get();
                    $html = view("dftqc.master.district.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    District::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The District Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = District::findOrFail($id);
                    $html = view("dftqc.master.district.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = District::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The District updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = District::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The District Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }

    public function getDistrict(Request $request)
    {
        $state_id = $request->state_id;
        $districts = District::where('state_id',$state_id)->get();
        return response()->json(['status'=>200, 'message'=>$districts]);
    }
}