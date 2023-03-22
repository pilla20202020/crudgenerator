<?php
namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\State;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Service\CommonModelService;
use Log;
use Exception;

class StateController extends Controller
{
    protected $modelService;
    public function __construct(State $model)
    {
        $this->modelService = new CommonModelService($model);
    }
    public function index(Request $request)
    {
        createActivityLog(StateController::class, 'index', 'Master State index');
        $data = State::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            $html = view("dftqc.master.state.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("dftqc.master.state.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {
        createActivityLog(StateController::class, 'create', 'Master State create');

        if ($request->ajax()) {
            $html = view("dftqc.master.state.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("dftqc.master.state.create");
    }

    public function store(Request $request)
    {
        createActivityLog(StateController::class, 'store', 'Master State store');

        $validator = Validator::make($request->all(), [
            'country_id' => 'required',
            'stateName' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ], 500);
        }
        $request->request->add(['alias' => slugify($request->stateName)]);
        DB::beginTransaction();
        try {
            $operationNumber = getOperationNumber();
            $this->modelService->create($operationNumber, $operationNumber, null, $request->all());
        } catch (\Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            createErrorLog(StateController::class, 'store', $e->getMessage());
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
        DB::commit();
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The State Created Successfully.'], 200);
        }
        return redirect()->route('master.state.index')->with('success', 'The State created Successfully.');
    }

    public function show(Request $request, $id)
    {
        createActivityLog(StateController::class, 'show', 'Master State show');

        $data = State::findOrFail($id);
        if ($request->ajax()) {
            $html = view("dftqc.master.state.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("dftqc.master.state.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        createActivityLog(StateController::class, 'edit', 'Master State edit');

        $data = State::findOrFail($id);
        if ($request->ajax()) {
            $html = view("dftqc.master.state.ajax.edit", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("dftqc.master.state.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        createActivityLog(StateController::class, 'update', 'Master State update');

        $validator = Validator::make($request->all(), [
            'country_id' => 'required',
            'stateName' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ], 500);
        }
        $request->request->add(['alias' => slugify($request->stateName)]);
        DB::beginTransaction();
        try {
            $OperationNumber = getOperationNumber();
            $this->modelService->update($OperationNumber, $OperationNumber, null, $request->all(), $id);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            createErrorLog(StateController::class, 'update', $e->getMessage());
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
        DB::commit();
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The State updated Successfully.'], 200);
        }
        return redirect()->route('master.state.index')->with('success', 'The State updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        createActivityLog(StateController::class, 'destroy', 'Master State destroy');

        DB::beginTransaction();
        try {
            $OperationNumber = getOperationNumber();
            $this->modelService->destroy($OperationNumber, $OperationNumber, $id);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            createErrorLog(StateController::class, 'destroy', $e->getMessage());
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
        DB::commit();
        return response()->json(['status' => true, 'message' => 'The State Deleted Successfully.'], 200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = State::where('status', '<>', -1)->get();
                return view("dftqc.master.state.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("dftqc.master.state.ajax.create")->render();
                break;
            case 'edit':
                $data = State::findOrFail($id);
                return view("dftqc.master.state.ajax.edit", compact('data'))->render();
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
                    $data = State::where('status', '<>', -1)->get();
                    $html = view("dftqc.master.state.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    State::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The State Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = State::findOrFail($id);
                    $html = view("dftqc.master.state.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = State::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The State updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = State::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The State Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }

    public function getState(Request $request)
    {
        $country_id = $request->country_id;
        $states = State::where('country_id',$country_id)->get();
        return response()->json(['status'=>200, 'message'=>$states]);
    }
}