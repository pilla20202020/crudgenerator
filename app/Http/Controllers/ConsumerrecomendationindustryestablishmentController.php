<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form4\Recommendationfoodindustryestablishment;
use App\Models\Form7\Newlicenseissue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ConsumerrecomendationindustryestablishmentController extends Controller
{
    public function index(Request $request)
    {
        $data = recommendationfoodindustryestablishment::where('status','<>',-1)->orderBy('created_at','desc')->get();
        $newregistration = Null ;
        $newlisence = Null ;
        if ($request->ajax()) {
            $html = view("consumer.form4.recommendationfoodindustryestablishment.ajax.create", compact('data','newregistration','newlisence'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("consumer.form4.recommendationfoodindustryestablishment.ajax.create", compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $html = view("consumer.form4.recommendationfoodindustryestablishment.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("consumer.form4.recommendationfoodindustryestablishment.create");
    }

    public function store(Request $request)
    {

    //     $validator = Validator::make($request->all(), [
    //     'industryName' => 'required',
    //     'industryAddress' => 'required',
    //     'industryOwnerLastName'=>'required',
    //     'productName'=>'required',
    //     'productType'=>'required',
    //     'techincialSkills'=>'required',
    //     'industryCapacity'=>'required',
    //     'industryBudget'=>'required',
    //     'applicantName'=>'required',
    //     'machinery'=>'required',
    //     'descriptionAndSourceOfRawMaterials'=>'required',
    //     'cleanManagement'=>'required',
    //     'industryOwnerName'=>'required',
    //     'applicantAddress'=>'required',
    // ]);

    // if ($validator->fails()) {
    //     return response()->json([
    //         'error' => $validator->errors()->all(),
    //     ]);
    // }

    if ($request->machinery) {
        $machinery = collect($request->machinery);
    }

    if (isset($machinery)) {
        $request['machinery'] = $machinery->implode(',');
    }

    if ($request->descriptionAndSourceOfRawMaterials) {
        $descriptionAndSourceOfRawMaterials = collect($request->descriptionAndSourceOfRawMaterials);
    }

    if (isset($descriptionAndSourceOfRawMaterials)) {
        $request['descriptionAndSourceOfRawMaterials'] = $descriptionAndSourceOfRawMaterials->implode(',');
    }
        $request->request->add(['alias' => slugify($request->recommendationfoodindustryestablishmentName)]);
        Recommendationfoodindustryestablishment::create($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'Your form is forwared to respected department ! '], 200);
        }
        return redirect()->route('consumer.form7.newlicenseissue.index')->with('success','Your form is forwared to respected department ! ');
        // return redirect()->route('form4.recommendationfoodindustryestablishment.ajax.create')->with('success','Your form is forwared to respected department ! ');
    }

    public function show(Request $request, $id)
    {
        $newlisence = Newlicenseissue::where('consumer_id',auth()->user()->id)->first();
        $newregistration = Recommendationfoodindustryestablishment::where('consumer_id',auth()->user()->id)->first();
        $data = Recommendationfoodindustryestablishment::findOrFail($id);
        if ($request->ajax()) {
            $html = view("consumer.form4.recommendationfoodindustryestablishment.ajax.show", compact('data','newregistration','newlisence'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("consumer.form4.recommendationfoodindustryestablishment.show", compact('data','newregistration','newlisence'));
    }

    public function tableview (Request $request, $id)
    {

        $newregistration = Recommendationfoodindustryestablishment::where('consumer_id',auth()->user()->id)->first();
        $newlisence = Newlicenseissue::where('consumer_id',auth()->user()->id)->first();
                $data = Recommendationfoodindustryestablishment::findOrFail($id);

        $newlisence = Newlicenseissue::where('consumer_id',auth()->user()->id)->first();
        if ($request->ajax()) {
            $html = view("consumer.form4.recommendationfoodindustryestablishment.tableview", compact('data','newregistration','newlisence'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("consumer.form4.recommendationfoodindustryestablishment.tableview", compact('data','newregistration','newlisence'));
    }


    public function edit(Request $request, $id)
    {
        $newlisence = Newlicenseissue::where('consumer_id',auth()->user()->id)->first();
        $newregistration = Recommendationfoodindustryestablishment::where('consumer_id',auth()->user()->id)->first();
        $data = Recommendationfoodindustryestablishment::findOrFail($id);
        if ($request->ajax()) {
            $html = view("consumer.form4.recommendationfoodindustryestablishment.ajax.edit", compact('data','newregistration','newlisence'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("consumer.form4.recommendationfoodindustryestablishment.edit", compact('data','newregistration','newlisence'));
    }

    public function update(Request $request, $id)
    {
        // $validator = Validator::make($request->all(), [
        //     'districtName' => 'required',
        //     'industryName' => 'required',
        //     'industryAddress' => 'required',
        //     'industryOwnerLastName'=>'required',
        //     'productName'=>'required',
        //     'productType'=>'required',
        //     'techincialSkills'=>'required',
        //     'industryCapacity'=>'required',
        //     'industryBudget'=>'required',
        //     'applicantName'=>'required',
        //     'machinery'=>'required',
        //     'descriptionAndSourceOfRawMaterials'=>'required',
        //     'cleanManagement'=>'required',
        //     'industryOwnerName'=>'required',
        //     'applicantAddress'=>'required',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json([
        //         'error' => $validator->errors()->all(),
        //     ]);
        // }

        if ($request->machinery) {
            $machinery = collect($request->machinery);
        }

        if (isset($machinery)) {
            $request['machinery'] = $machinery->implode(',');
        }

        if ($request->descriptionAndSourceOfRawMaterials) {
            $descriptionAndSourceOfRawMaterials = collect($request->descriptionAndSourceOfRawMaterials);
        }

        if (isset($descriptionAndSourceOfRawMaterials)) {
            $request['descriptionAndSourceOfRawMaterials'] = $descriptionAndSourceOfRawMaterials->implode(',');
        }

        $data = Recommendationfoodindustryestablishment::findOrFail($id);
        $request->request->add(['alias' => slugify($request->recommendationfoodindustryestablishmentName)]);
        $data->update($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Recommendationfoodindustryestablishment updated Successfully.'], 200);
        }
        return redirect()->route('form4.recommendationfoodindustryestablishment.index')->with('success','The Recommendationfoodindustryestablishment updated Successfully.');
    }

    public function destroy(Request $request,$id)
    {
        $data = Recommendationfoodindustryestablishment::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status'=>true,'message'=>'The Recommendationfoodindustryestablishment Deleted Successfully.'],200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = Recommendationfoodindustryestablishment::where('status', '<>', -1)->get();
                return view("consumer.form4.recommendationfoodindustryestablishment.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("consumer.form4.recommendationfoodindustryestablishment.ajax.create")->render();
                break;
            case 'edit':
                $data = Recommendationfoodindustryestablishment::findOrFail($id);
                return view("consumer.form4.recommendationfoodindustryestablishment.ajax.edit", compact('data'))->render();
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
                    $data = Recommendationfoodindustryestablishment::where('status', '<>', -1)->get();
                    $html = view("consumer.form4.recommendationfoodindustryestablishment.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    Recommendationfoodindustryestablishment::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'Your form has been submitted to the respected department'], 200);
                    }
                    break;
                case 'edit':
                    $data = Recommendationfoodindustryestablishment::findOrFail($id);
                    $html = view("consumer.form4.recommendationfoodindustryestablishment.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = Recommendationfoodindustryestablishment::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The Recommendationfoodindustryestablishment updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = Recommendationfoodindustryestablishment::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The Recommendationfoodindustryestablishment Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }
}
