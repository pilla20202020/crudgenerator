<?php
        namespace App\Http\Controllers\Form1;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Form1\Foodindustryinspectionreport;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class foodindustryinspectionreportController extends Controller
        {
           public function index(Request $request)
            {
                $data = Foodindustryinspectionreport::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("dftqc.foodindustryinspectionreport.foodindustryinspectionreport.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.foodindustryinspectionreport.foodindustryinspectionreport.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("dftqc.foodindustryinspectionreport.foodindustryinspectionreport.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.foodindustryinspectionreport.foodindustryinspectionreport.create");
            }

            public function store(Request $request)
            {
                // dd($request->all());
                $request->request->add(['alias' => slugify($request->foodindustryinspectionreportName)]);
                Foodindustryinspectionreport::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The foodindustryinspectionreport. Created Successfully.'], 200);
                }
                return redirect()->route('foodindustryinspectionreport.foodindustryinspectionreport..index')->with('success','The foodindustryinspectionreport. created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Foodindustryinspectionreport::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("dftqc.foodindustryinspectionreport.foodindustryinspectionreport.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.foodindustryinspectionreport.foodindustryinspectionreport.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Foodindustryinspectionreport::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("dftqc.foodindustryinspectionreport.foodindustryinspectionreport.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.foodindustryinspectionreport.foodindustryinspectionreport.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Foodindustryinspectionreport::findOrFail($id);
                $request->request->add(['alias' => slugify($request->foodindustryinspectionreportName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The foodindustryinspectionreport. updated Successfully.'], 200);
                }
                return redirect()->route('foodindustryinspectionreport.foodindustryinspectionreport.index')->with('success','The foodindustryinspectionreport. updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Foodindustryinspectionreport::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The foodindustryinspectionreport. Deleted Successfully.'],200);
            }

            public function test()
            {
                return view('dftqc.foodindustryinspectionreport.test');
            }

            public function storeTest(Request $request)
            {
                dd($request->all());
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Foodindustryinspectionreport::where('status', '<>', -1)->get();
                        return view("dftqc.foodindustryinspectionreport.foodindustryinspectionreport.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("dftqc.foodindustryinspectionreport.foodindustryinspectionreport.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Foodindustryinspectionreport::findOrFail($id);
                        return view("dftqc.foodindustryinspectionreport.foodindustryinspectionreport.ajax.edit", compact('data'))->render();
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
                            $data = Foodindustryinspectionreport::where('status', '<>', -1)->get();
                            $html = view("dftqc.foodindustryinspectionreport.foodindustryinspectionreport.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Foodindustryinspectionreport::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The foodindustryinspectionreport. Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Foodindustryinspectionreport::findOrFail($id);
                            $html = view("dftqc.foodindustryinspectionreport.foodindustryinspectionreport.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Foodindustryinspectionreport::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The foodindustryinspectionreport. updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Foodindustryinspectionreport::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The foodindustryinspectionreport. Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
