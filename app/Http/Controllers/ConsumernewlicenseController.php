<?php

namespace App\Http\Controllers;

use App\Models\Form4\Recommendationfoodindustryestablishment;
use Illuminate\Http\Request;
use App\Models\Form7\Newlicenseissue;
use App\Models\Form7\NewlicenseSubstance as Form7NewlicenseSubstance;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\newlicenseSubstance;
class ConsumernewlicenseController extends Controller
{
    public function index(Request $request)
    {
        // dd('fdgsd');
        $data = Newlicenseissue::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            $html = view("consumer.form7.newlicenseissue.ajax.create", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("consumer.form7.newlicenseissue.ajax.create", compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $html = view("consumer.form7.newlicenseissue.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("consumer.form7.newlicenseissue.create");
    }

    public function store(Request $request)
    {

        dd($request->all());

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

        $request['consumer_id'] = auth()->user()->id;

        $data = $request->all();
        $request->request->add(['alias' => slugify($request->newlicenseissueName)]);
        if (!empty($data['industryregistrationCertificate'])) {
            $industryregistrationCertificatePath = uploadCommonFile('newlicense', $data['industryregistrationCertificate'], '');
            $data['industryregistrationCertificate'] = $industryregistrationCertificatePath;
        }
        if (!empty($data['revenueReceipt'])) {
            $revenueReceiptPath = uploadCommonFile('newlicense', $data['revenueReceipt'], '');
            $data['revenueReceipt'] = $revenueReceiptPath;
        }
        if (!empty($data['letter'])) {
            $letterPath = uploadCommonFile('newlicense', $data['letter'], '');
            $data['letter'] = $letterPath;
        }
        if (!empty($data['industralistLetter'])) {
            $industralistLetterPath = uploadCommonFile('newlicense', $data['industralistLetter'], '');
            $data['industralistLetter'] = $industralistLetterPath;
        }
        if (!empty($data['passportSize'])) {
            $passportSizePath = uploadCommonFile('newlicense', $data['passportSize'], '');
            $data['passportSize'] = $passportSizePath;
        }
        if (!empty($data['packagedLogo'])) {
            $packagedLogoPath = uploadCommonFile('newlicense', $data['packagedLogo'], '');
            $data['packagedLogo'] = $packagedLogoPath;
        }
        if (!empty($data['roadMap'])) {
            $roadMapPath = uploadCommonFile('newlicense', $data['roadMap'], '');
            $data['roadMap'] = $roadMapPath;
        }
        if (!empty($data['citizenshipCopy'])) {
            $citizenshipCopyPath = uploadCommonFile('newlicense', $data['citizenshipCopy'], '');
            $data['citizenshipCopy'] = $citizenshipCopyPath;
        }

// for newlicense substance
$newlicense = Newlicenseissue::create($request->except('foodNameOne','packingSizeOne','brandOne'));

if (!empty($request['foodNameOne'])) {
    foreach ($request['foodNameOne'] as  $key => $value) {
        if(isset($value)) {
            $files = [
                'newlicenseissue_id' => $newlicense->newlicenseissue_id,
                'foodNameOne' => $request['foodNameOne'][$key] ?? null,
                'packingSizeOne' => $request['packingSizeOne'][$key] ?? null,
                'brandOne' => $request['brandOne'][$key] ?? null,
               
            ];
            // dd($quali);
            Form7NewlicenseSubstance::create($files);
        }

    }
    
}
// end for newlicense substance


        Newlicenseissue::create($data);
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Newlicenseissue Created Successfully.'], 200);
        }
        return redirect()->route('form7.newlicenseissue.index')->with('success', 'The Newlicenseissue created Successfully.');
    }

    public function show(Request $request, $id)
    {
        // dd(auth()->user());
        $newlisence = Newlicenseissue::where('consumer_id',auth()->user()->id)->first();
        $newregistration = Recommendationfoodindustryestablishment::where('consumer_id',auth()->user()->id)->first();
        $data = Newlicenseissue::findOrFail($id);
        if ($request->ajax()) {
            $html = view("consumer.form7.newlicenseissue.show", compact('data','newlisence','newregistration'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("consumer.form7.newlicenseissue.show", compact('data','newlisence','newregistration'));
    }
    public function tableview(Request $request, $id)
    {
        $newlisence = Newlicenseissue::where('consumer_id',auth()->user()->id)->first();
        $newregistration = Recommendationfoodindustryestablishment::where('consumer_id',auth()->user()->id)->first();

        $data = Newlicenseissue::findOrFail($id);
        if ($request->ajax()) {
            $html = view("consumer.form7.newlicenseissue.tableview", compact('data','newlisence','newregistration'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("consumer.form7.newlicenseissue.tableview", compact('data','newlisence','newregistration'));
    }



      public function edit(Request $request, $id)
    {
        // dd($request->all());
        
        $data = Newlicenseissue::findOrFail($id);
        $industryMachineOne = explode(',', $data->industryMachineOne);
        $industryManageOne = explode(',', $data->industryManageOne);
        $labWorksOne = explode(',', $data->labWorksOne);

        if ($request->ajax()) {
            $html = view("consumer.form7.newlicenseissue.ajax.edit", compact('data','industryMachineOne','industryManageOne','labWorksOne'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("consumer.form7.newlicenseissue.edit", compact('data','industryMachineOne','industryManageOne','labWorksOne'));
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
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

        $data = Newlicenseissue::findOrFail($id);
        $data->labWorksOne = null;
        $data->industryManageOne = null;
        $data->industryMachineOne = null;
        $data->brandOne = null;
        $data->packingSizeOne = null;
        $data->foodNameOne = null;


        $updateDate = $request->all();
        if (!empty($updateDate['roadMap'])) {
            $citizenshipCopyPath = uploadCommonFile('newlicense', $updateDate['citizenshipCopy'], '', $data->citizenshipCopy);
            $updateDate['citizenshipCopy'] = $citizenshipCopyPath;
        } else {
            $updateDate['citizenshipCopy'] = $data->packagedLogo;
        }

  // for repeater update start
                $existingSubstance = NewlicenseSubstance::where('newlicensesubstance_id', $request['newlicensesubstance_id'][$key])->where('newlicenseissue_id', $id)->first();

                if(!$existingSubstance)
                {
                    $files = [
                        'newlicenseissue_id' => $newlicense->newlicenseissue_id,
                        'foodNameOne' => $request['foodNameOne'][$key] ?? null,
                        'packingSizeOne' => $request['packingSizeOne'][$key] ?? null,
                        'brandOne' => $request['brandOne'][$key] ?? null,
                    ];
                    NewlicenseSubstance::create($files);
                }


                // for repeater update end

        $request->request->add(['alias' => slugify($request->newlicenseissueName)]);
        $data->update($updateDate);
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Newlicenseissue updated Successfully.'], 200);
        }
        return redirect()->route('form7.newlicenseissue.index')->with('success','The Newlicenseissue updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $data = Newlicenseissue::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status' => true, 'message' => 'The Newlicenseissue Deleted Successfully.'], 200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = Newlicenseissue::where('status', '<>', -1)->get();
                return view("dftqc.form7.newlicenseissue.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("dftqc.form7.newlicenseissue.ajax.create")->render();
                break;
            case 'edit':
                $data = Newlicenseissue::findOrFail($id);
                return view("dftqc.form7.newlicenseissue.ajax.edit", compact('data'))->render();
                break;
            default:
                return 'Not Found';
        }
    }

    public function toApprove(Request $request)
    {

        $data = Newlicenseissue::findOrFail($request->approved_id);
        $dat['approved_by'] = auth()->user()->id;
        $dat['approved_date'] = date('Y-m-d');
        $dat['newlicenseissue_status'] = "approved";
        $data->update($dat);

        if ($data && !empty($data->consumer->emailAddress)) {
            try {
                $mail_data = [
                    'name' => $data->consumer->firstName,
                    'remarks' => $data->recommendationfoodindustryestablishment_remarks,
                    'subject' => 'Regarding Update on New License Issue',
                    'message' => 'Your New License Issue has been rejected.',
                    'view' => 'dftqc.emails.approved'
                ];
                Mail::to($data->consumer->emailAddress)->send(new CommonMail($mail_data, $data));
            } catch (Exception $e) {
                Log::info($e->getMessage());
            }
        }
        return redirect()->route('form7.newlicenseissue.index')->with('success', 'The New Liscnece has been approved.');
    }

    public function toReject(Request $request)
    {

        $data = Newlicenseissue::findOrFail($request->rejected_id);
        $dat['approved_by'] = auth()->user()->id;
        $dat['approved_date'] = date('Y-m-d');
        $dat['newlicenseissue_status'] = "rejected";
        $dat['newlicenseissue_remarks'] = $request->newlicenseissue_remarks;
        $request->request->add(['alias' => slugify($request->leaveapplicationName)]);
        $data->update($dat);

        if ($data && !empty($data->consumer->emailAddress)) {
            try {
                $mail_data = [
                    'name' => $data->consumer->firstName,
                    'remarks' => $data->recommendationfoodindustryestablishment_remarks,
                    'subject' => 'Regarding Update on New License Issue',
                    'message' => 'Your New License Issue has been rejected.',
                    'view' => 'dftqc.emails.approved'
                ];
                Mail::to($data->consumer->emailAddress)->send(new CommonMail($mail_data, $data));
            } catch (Exception $e) {
                Log::info($e->getMessage());
            }
        }
        return redirect()->route('form7.newlicenseissue.index')->with('success', 'The New Liscence has been rejected.');
    }

    public function api(Request $request, $action, $authCode = null)
    {
        $id = $request->primary_id;

        $route = $request->route()->uri;
        $route = explode('/', $route);
        if ($route[0] == 'api') {
            switch ($action) {
                case 'index':
                    $data = Newlicenseissue::where('status', '<>', -1)->get();
                    $html = view("dftqc.form7.newlicenseissue.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    Newlicenseissue::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The Newlicenseissue Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = Newlicenseissue::findOrFail($id);
                    $html = view("dftqc.form7.newlicenseissue.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = Newlicenseissue::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The Newlicenseissue updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = Newlicenseissue::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The Newlicenseissue Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }
}

