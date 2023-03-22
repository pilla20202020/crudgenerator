<?php
        namespace App\Http\Controllers\Form9;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Form9\Licensinginspectionbranch;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class LicensinginspectionbranchController extends Controller
        {
           public function index(Request $request)
            {
                $data = Licensinginspectionbranch::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("dftqc.form9.licensinginspectionbranch.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form9.licensinginspectionbranch.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("dftqc.form9.licensinginspectionbranch.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form9.licensinginspectionbranch.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->licensinginspectionbranchName)]);
                Licensinginspectionbranch::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Licensinginspectionbranch Created Successfully.'], 200);
                }
                return redirect()->route('form9.licensinginspectionbranch.index')->with('success','The Licensinginspectionbranch created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Licensinginspectionbranch::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("dftqc.form9.licensinginspectionbranch.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form9.licensinginspectionbranch.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Licensinginspectionbranch::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("dftqc.form9.licensinginspectionbranch.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form9.licensinginspectionbranch.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Licensinginspectionbranch::findOrFail($id);
                $request->request->add(['alias' => slugify($request->licensinginspectionbranchName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Licensinginspectionbranch updated Successfully.'], 200);
                }
                return redirect()->route('form9.licensinginspectionbranch.index')->with('success','The Licensinginspectionbranch updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Licensinginspectionbranch::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Licensinginspectionbranch Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Licensinginspectionbranch::where('status', '<>', -1)->get();
                        return view("dftqc.form9.licensinginspectionbranch.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("dftqc.form9.licensinginspectionbranch.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Licensinginspectionbranch::findOrFail($id);
                        return view("dftqc.form9.licensinginspectionbranch.ajax.edit", compact('data'))->render();
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
                            $data = Licensinginspectionbranch::where('status', '<>', -1)->get();
                            $html = view("dftqc.form9.licensinginspectionbranch.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Licensinginspectionbranch::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Licensinginspectionbranch Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Licensinginspectionbranch::findOrFail($id);
                            $html = view("dftqc.form9.licensinginspectionbranch.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Licensinginspectionbranch::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Licensinginspectionbranch updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Licensinginspectionbranch::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Licensinginspectionbranch Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        