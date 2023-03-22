<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Form5\Renewalfoodindustrylicense;
use App\Models\Form5\SubstanceDetail;
use Illuminate\Http\Request;

class ConsumerrenewallicenseController extends Controller
{
    public function index(Request $request)
    {
        $data = Renewalfoodindustrylicense::where('status','<>',-1)->orderBy('created_at','desc')->get();
        if ($request->ajax()) {
            $html = view("consumer.form5.renewalfoodindustrylicense.ajax.create", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("consumer.form5.renewalfoodindustrylicense.ajax.create", compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $html = view("consumer.form5.renewalfoodindustrylicense.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("consumer.form5.renewalfoodindustrylicense.create");
    }

    public function store(Request $request)
    {dd($request->all());
        if ($request->foodNameOne) {
            $foodNameOne = collect($request->foodNameOne);
        }
        if (isset($foodNameOne)) {
            $request['foodNameOne'] = $foodNameOne->implode(',');
        }

        if ($request->packingSizeOne) {
            $packingSizeOne = collect($request->packingSizeOne);
        }
        if (isset($packingSizeOne)) {
            $request['packingSizeOne'] = $packingSizeOne->implode(',');
        }

        if ($request->brandOne) {
            $brandOne = collect($request->brandOne);
        }
        if (isset($brandOne)) {
            $request['brandOne'] = $brandOne->implode(',');
        }

        if ($request->industryMachineOne) {
            $industryMachineOne = collect($request->industryMachineOne);
        }
        if (isset($industryMachineOne)) {
            $request['industryMachineOne'] = $industryMachineOne->implode(',');
        }

        if ($request->industryManageOne) {
            $industryManageOne = collect($request->industryManageOne);
        }
        if (isset($industryManageOne)) {
            $request['industryManageOne'] = $industryManageOne->implode(',');
        }
        
        if ($request->labWorksOne) {
            $labWorksOne = collect($request->labWorksOne);
        }
        if (isset($labWorksOne)) {
            $request['labWorksOne'] = $labWorksOne->implode(',');
        }

        $request['consumer_id'] = auth()->user()->consumer->employee_id;

        $data = $request->all();

        $request->request->add(['alias' => slugify($request->renewalfoodindustrylicenseName)]);

        if (!empty($data['issueDateImage'])) {
            $issueDatePath = uploadCommonFile('newlicense', $data['issueDateImage'], '');
            $data['issueDateImage'] = $issueDatePath;
        }
        if (!empty($data['receiptImage'])) {
            $receiptPath = uploadCommonFile('newlicense', $data['receiptImage'], '');
            $data['receiptImage'] = $receiptPath;
        }
        if (!empty($data['productionImage'])) {
            $productionPath = uploadCommonFile('newlicense', $data['productionImage'], '');
            $data['productionImage'] = $productionPath;
        }
        if (!empty($data['labelImage'])) {
            $labelPath = uploadCommonFile('newlicense', $data['labeImage'], '');
            $data['labelImage'] = $labelPath;
        }
        if (!empty($data['sampleImage'])) {
            $samplePath = uploadCommonFile('newlicense', $data['sampleImage'], '');
            $data['sampleImage'] = $samplePath;
        }
        if (!empty($data['photocopyImage'])) {
            $photocopyPath = uploadCommonFile('newlicense', $data['photocopyImage'], '');
            $data['photocopyImage'] = $photocopyPath;
        }
      
        $renewal = Renewalfoodindustrylicense::create($request->except('ediblesOne','packingOne','brandOne'));

                if (!empty($request['ediblesOne'])) {
                    foreach ($request['ediblesOne'] as  $key => $value) {
                        if(isset($value)) {
                            $files = [
                                'renewalfoodindustrylicense_id' => $renewal->renewalfoodindustrylicense_id,
                                'ediblesOne' => $request['ediblesOne'][$key] ?? null,
                                'packingOne' => $request['packingOne'][$key] ?? null,
                                'brandOne' => $request['brandOne'][$key] ?? null,
                            ];
                            // dd($quali);
                            SubstanceDetail::create($files);
                        }

                    }
                }
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'Your form is forwared to respected department ! '], 200);
        }

        dd($request->all());
        
        return redirect()->route('form5.renewalfoodindustrylicense.index')->with('success','Your form is forwared to respected department ! ');
    }

    public function show(Request $request, $id)
    {
        $data = Renewalfoodindustrylicense::findOrFail($id);
        if ($request->ajax()) {
            $html = view("consumer.form5.renewalfoodindustrylicense.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("consumer.form5.renewalfoodindustrylicense.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        $data = Renewalfoodindustrylicense::findOrFail($id);
        if ($request->ajax()) {
            $html = view("consumer.form5.renewalfoodindustrylicense.ajax.edit", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("consumer.form5.renewalfoodindustrylicense.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {if ($request->ediblesOne) {
        $ediblesOne = collect($request->ediblesOne);
    }
    if (isset($ediblesOne)) {
        $request['ediblesOne'] = $ediblesOne->implode(',');
    }
    if ($request->packingOne) {
        $packingOne = collect($request->packingOne);
    }
    if (isset($packingOne)) {
        $request['packingOne'] = $packingOne->implode(',');
    }
    if ($request->brandOne) {
        $brandOne = collect($request->brandOne);
    }
    if (isset($brandOne)) {
        $request['brandOne'] = $brandOne->implode(',');
    }
    if ($request->machinery) {
        $machinery = collect($request->machinery);
    }
    if (isset($machinery)) {
        $request['machinery'] = $machinery->implode(',');
    }
    if ($request->skills) {
        $skills = collect($request->skills);
    }
    if (isset($skills)) {
        $request['skills'] = $skills->implode(',');
    }
    if ($request->paramater) {
        $paramater = collect($request->paramater);
    }
    if (isset($paramater)) {
        $request['paramater'] = $paramater->implode(',');
    }

        $data = Renewalfoodindustrylicense::findOrFail($id);
        $data->ediblesOne = null;
        $data->packingOne = null;
        $data->brandOne = null;
        $data->machinery = null;
        $data->skills = null;
        $data->paramater = null;

        $request->request->add(['alias' => slugify($request->renewalfoodindustrylicenseName)]);

        $data = Renewalfoodindustrylicense::findOrFail($id);
        $request->request->add(['alias' => slugify($request->renewalfoodindustrylicenseName)]);
        $renewal = $data->update($request->except('ediblesOne','packingOne','brandOne'));
        $deletedSubstance = SubstanceDetail::whereNotIn('substanceDetail_id',$request['substanceDetail_id'])->where('renewalfoodindustrylicense_id', $id)->delete();
        foreach ($data['employee_id'] as  $key => $value)  {
            // $existingEmployee = ProjectEmployee::where('employee_id', $value)->where('workProject_id', $id)->first();
            $existingSubstance = SubstanceDetail::where('substanceDetail_id', $request['substanceDetail_id'][$key])->where('renewalfoodindustrylicense_id', $id)->first();

            if(!$existingSubstance)
            {
                $files = [
                    'renewalfoodindustrylicense_id' => $renewal->renewalfoodindustrylicense_id,
                    'ediblesOne' => $request['ediblesOne'][$key] ?? null,
                    'packingOne' => $request['packingOne'][$key] ?? null,
                    'brandOne' => $request['brandOne'][$key] ?? null,
                ];
                SubstanceDetail::create($files);
            }

        }
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Renewalfoodindustrylicense updated Successfully.'], 200);
        }
        return redirect()->route('form5.renewalfoodindustrylicense.index')->with('success','The Renewalfoodindustrylicense updated Successfully.');
    }

    public function destroy(Request $request,$id)
    {
        $data = Renewalfoodindustrylicense::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status'=>true,'message'=>'The Renewalfoodindustrylicense Deleted Successfully.'],200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = Renewalfoodindustrylicense::where('status', '<>', -1)->get();
                return view("consumer.form5.renewalfoodindustrylicense.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("consumer.form5.renewalfoodindustrylicense.ajax.create")->render();
                break;
            case 'edit':
                $data = Renewalfoodindustrylicense::findOrFail($id);
                return view("consumer.form5.renewalfoodindustrylicense.ajax.edit", compact('data'))->render();
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
                    $data = Renewalfoodindustrylicense::where('status', '<>', -1)->get();
                    $html = view("consumer.form5.renewalfoodindustrylicense.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    Renewalfoodindustrylicense::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The Renewalfoodindustrylicense Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = Renewalfoodindustrylicense::findOrFail($id);
                    $html = view("consumer.form5.renewalfoodindustrylicense.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = Renewalfoodindustrylicense::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The Renewalfoodindustrylicense updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = Renewalfoodindustrylicense::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The Renewalfoodindustrylicense Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }
}
