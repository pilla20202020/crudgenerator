<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class HrApplicantController extends Controller
        {
           public function index(Request $request)
            {
                $data = User::where('status','<>',-1)->where('user_type','APPLICANT')->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("dftqc.hr.applicant.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.hr.applicant.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("dftqc.hr.applicant.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.hr.applicant.create");
            }

            public function store(Request $request)
            {
                $validator = Validator::make($request->all(), [
                    'applicantName' => 'required',
                    'rank' => 'required',
                    'status' => 'required',
                ]);
        
                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }

                $request->request->add(['alias' => slugify($request->applicantName)]);
                User::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The applicant Created Successfully.'], 200);
                }
                return redirect()->route('hr.applicant.index')->with('success','The applicant created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = User::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("dftqc.hr.applicant.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.hr.applicant.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = User::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("dftqc.hr.applicant.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.hr.applicant.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $validator = Validator::make($request->all(), [
                    'applicantName' => 'required',
                      'rank' => 'required',
                    'status' => 'required',
                ]);
        
                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }
                $data = User::findOrFail($id);
                $request->request->add(['alias' => slugify($request->applicantName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The applicant updated Successfully.'], 200);
                }
                return redirect()->route('hr.applicant.index')->with('success','The applicant updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = User::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The applicant Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = User::where('status', '<>', -1)->get();
                        return view("dftqc.hr.applicant.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("dftqc.hr.applicant.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = User::findOrFail($id);
                        return view("dftqc.hr.applicant.ajax.edit", compact('data'))->render();
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
                            $data = User::where('status', '<>', -1)->get();
                            $html = view("dftqc.hr.applicant.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            User::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The applicant Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = User::findOrFail($id);
                            $html = view("dftqc.hr.applicant.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = User::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The applicant updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = User::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The applicant Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        