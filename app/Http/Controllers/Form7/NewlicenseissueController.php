<?php

namespace App\Http\Controllers\Form7;

use App\Http\Controllers\Controller;
use App\Mail\CommonMail;
use App\Models\Form4\Recommendationfoodindustryestablishment;
use Illuminate\Http\Request;
use App\Models\Form7\Newlicenseissue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\Form7\NewlicenseSubstance;
use \PDF;

class NewlicenseissueController extends Controller
{
    public function index(Request $request)
    {
        // dd('asdgfsdg');
        // dd(auth()->user()->hasRole('license-officer'));
        if(auth()->user()->user_type == 'APPLICANT'){
            $data = Newlicenseissue::where('status', '<>', -1)->where('consumer_id',auth()->user()->id)->orderBy('created_at', 'desc')->get();
        }
        elseif(auth()->user()->hasRole('license-head-department')){
            $data = Newlicenseissue::where('status', '<>', -1)->where('newlicenseissue_status','forwarded')->orderBy('created_at', 'desc')->get();
        } else {
            $data = Newlicenseissue::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
        }
        if ($request->ajax()) {
            $html = view("dftqc.form7.newlicenseissue.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("dftqc.form7.newlicenseissue.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $html = view("dftqc.form7.newlicenseissue.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("dftqc.form7.newlicenseissue.create");
    }

            public function store(Request $request)
            {

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

                $data = $request->except('foodNameOne','packingSizeOne','brandOne');

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

             //for new license substance
             $newlicense = Newlicenseissue::create($data);

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
                            NewlicenseSubstance::create($files);
                        }

                    }

                }

                // Newlicenseissue::create($data);
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Newlicenseissue Created Successfully.'], 200);
                }
                return redirect()->route('form7.newlicenseissue.index')->with('success', 'The Newlicenseissue created Successfully.');
            }

    public function show(Request $request, $id)
    {

        $data = Newlicenseissue::findOrFail($id);
        $recommendation = Recommendationfoodindustryestablishment::where('consumer_id', $data->consumer_id)->first();

        if ($request->ajax()) {
            $html = view("dftqc.form7.newlicenseissue.ajax.show", compact('data','recommendation'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("dftqc.form7.newlicenseissue.show", compact('data','recommendation'));
    }

    public function print(Request $request, $id)
    {
        $data = Newlicenseissue::findOrFail($id);
        $recommendation = Recommendationfoodindustryestablishment::where('consumer_id', $data->consumer_id)->first();
        if ($request->ajax()) {
            $html = view("dftqc.form7.newlicenseissue.ajax.print", compact('data','recommendation'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("dftqc.form7.newlicenseissue.print", compact('data','recommendation'));

        // $data = Newlicenseissue::findOrFail($id)->toArray();

        // $recommendation = Recommendationfoodindustryestablishment::where('consumer_id', $data['consumer_id'])->first()->toArray();
        // $pdf = PDF::loadView('dftqc.form7.newlicenseissue.print', compact('data','recommendation'))->setPaper('a4', 'landscape');
        // return $pdf->stream('newlicenseissue.pdf');

    }


    public function edit(Request $request, $id)
    {

        $data = Newlicenseissue::findOrFail($id);
        $industryMachineOne = explode(',', $data->industryMachineOne);
        $industryManageOne = explode(',', $data->industryManageOne);
        $labWorksOne = explode(',', $data->labWorksOne);

        if ($request->ajax()) {
            $html = view("dftqc.form7.newlicenseissue.ajax.edit", compact('data','industryMachineOne','industryManageOne','labWorksOne'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("dftqc.form7.newlicenseissue.edit", compact('data','industryMachineOne','industryManageOne','labWorksOne'));
    }


        public function update(Request $request, $id)
        {
            // dd($request->all());


            $data = Newlicenseissue::findOrFail($id);


            $data->labWorksOne = null;
            $data->industryManageOne = null;
            $data->industryMachineOne = null;

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


            // $data->brandOne = null;
            // $data->packingSizeOne = null;
            // $data->foodNameOne = null;
            $updateDate = $request->except('foodNameOne','packingSizeOne','brandOne');

            if (!empty($updateDate['industryregistrationCertificate'])) {
                $industryregistrationCertificatePath = uploadCommonFile('newlicense', $updateDate['industryregistrationCertificate'], '', $data->industryregistrationCertificatePath);
                $updateDate['industryregistrationCertificate'] = $industryregistrationCertificatePath;
            } else {
                $updateDate['industryregistrationCertificate'] = $data->industryregistrationCertificate;
            }


            if (!empty($updateDate['revenueReceipt'])) {
                $industryregistrationCertificatePath = uploadCommonFile('newlicense', $updateDate['revenueReceipt'], '', $data->revenueReceipt);
                $updateDate['revenueReceipt'] = $industryregistrationCertificatePath;
            } else {
                $updateDate['revenueReceipt'] = $data->revenueReceipt;
            }


            if (!empty($updateDate['letter'])) {
                $letterPath = uploadCommonFile('newlicense', $updateDate['letter'], '', $data->letter);
                $updateDate['letter'] = $letterPath;
            } else {
                $updateDate['letter'] = $data->letter;
            }


            if (!empty($updateDate['industralistLetter'])) {
                $industralistLetterPath = uploadCommonFile('newlicense', $updateDate['industralistLetter'], '', $data->industralistLetter);
                $updateDate['industralistLetter'] = $industralistLetterPath;
            } else {
                $updateDate['industralistLetter'] = $data->industralistLetter;
            }


            if (!empty($updateDate['passportSize'])) {
                $passportSizePath = uploadCommonFile('newlicense', $updateDate['passportSize'], '', $data->passportSize);
                $updateDate['passportSize'] = $passportSizePath;
            } else {
                $updateDate['passportSize'] = $data->passportSize;
            }


            if (!empty($updateDate['packagedLogo'])) {
                $packagedLogoPath = uploadCommonFile('newlicense', $updateDate['packagedLogo'], '', $data->packagedLogo);
                $updateDate['packagedLogo'] = $packagedLogoPath;
            } else {
                $updateDate['packagedLogo'] = $data->packagedLogo;
            }


            if (!empty($updateDate['roadMap'])) {
                $roadMapPath = uploadCommonFile('newlicense', $updateDate['roadMap'], '', $data->roadMap);
                // dd($roadMapPath);
                $updateDate['roadMap'] = $roadMapPath;
            } else {
                $updateDate['roadMap'] = $data->roadMap;
            }

            if (!empty($updateDate['citizenshipCopy'])) {
                $citizenshipCopyPath = uploadCommonFile('newlicense', $updateDate['citizenshipCopy'], '', $data->citizenshipCopy);
                $updateDate['citizenshipCopy'] = $citizenshipCopyPath;
            } else {
                $updateDate['citizenshipCopy'] = $data->citizenshipCopy;
            }
            // for repeater update start



            // for repeater update end
            // dd($updateDate);

            $request->request->add(['alias' => slugify($request->newlicenseissueName)]);
            $newlicense = $data->update($updateDate);

            // $existingSubstance = NewlicenseSubstance::where('newlicensesubstance_id', $request['substanceDetail_id'])->where('newlicenseissue_id', $id)->delete();

            // if(!$existingSubstance)
            // {
            //     $files = [
            //         'newlicenseissue_id' => $newlicense->newlicenseissue_id,
            //         'foodNameOne' => $request['foodNameOne'][$key] ?? null,
            //         'packingSizeOne' => $request['packingSizeOne'][$key] ?? null,
            //         'brandOne' => $request['brandOne'][$key] ?? null,
            //     ];
            //     NewlicenseSubstance::create($files);
            // }

            $deletedSubstance = NewlicenseSubstance::whereNotIn('newlicensesubstance_id',$request['substanceDetail_id'])->where('newlicenseissue_id', $id)->delete();
            foreach ($request['foodNameOne'] as  $key => $value)  {
                // $existingEmployee = ProjectEmployee::where('employee_id', $value)->where('workProject_id', $id)->first();
                $existingSubstance = NewlicenseSubstance::where('newlicensesubstance_id', $request['substanceDetail_id'][$key])->where('newlicenseissue_id', $id)->first();

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

            }
            if ($request->ajax()) {
                return response()->json(['status' => true, 'message' => 'The Newlicenseissue updated Successfully.'], 200);
            }
            return redirect()->route('form7.newlicenseissue.index')->with('success', 'The Newlicenseissue updated Successfully.');
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
        $dat['process'] = "new";
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
                $dat['process'] = "review";
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
                return redirect()->route('form7.newlicenseissue.index')->with('success','The New Liscence has been rejected.');

            }

            public function toForward(Request $request)
            {

                $data = Newlicenseissue::findOrFail($request->forwardthis);
                $dat['approved_by'] = auth()->user()->id;
                $dat['approved_date'] = date('Y-m-d');
                $dat['newlicenseissue_status'] = "forwarded";
                $data->update($dat);

                // if ($data && !empty($data->consumer->emailAddress)) {
                //     try {
                //         $mail_data = [
                //             'name' => $data->consumer->firstName,
                //             'remarks' => $data->recommendationfoodindustryestablishment_remarks,
                //             'subject' => 'Regarding Update on New License Issue',
                //             'message' => 'Your New License Issue has been rejected.',
                //             'view' => 'dftqc.emails.approved'
                //         ];
                //         Mail::to($data->consumer->emailAddress)->send(new CommonMail($mail_data, $data));
                //     } catch (Exception $e) {
                //         Log::info($e->getMessage());
                //     }
                // }
                return redirect()->route('form7.newlicenseissue.index')->with('success','The New Liscence has been forwarded.');

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
