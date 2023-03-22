<?php
        namespace App\Http\Controllers\Form10;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Form10\Analysisreport;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class AnalysisreportController extends Controller
        {
           public function index(Request $request)
            {
                $data = Analysisreport::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("dftqc.form10.analysisreport.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form10.analysisreport.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("dftqc.form10.analysisreport.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form10.analysisreport.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->analysisreportName)]);
                Analysisreport::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Analysisreport Created Successfully.'], 200);
                }
                return redirect()->route('form10.analysisreport.index')->with('success','The Analysisreport created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Analysisreport::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("dftqc.form10.analysisreport.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form10.analysisreport.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Analysisreport::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("dftqc.form10.analysisreport.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form10.analysisreport.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Analysisreport::findOrFail($id);
                $request->request->add(['alias' => slugify($request->analysisreportName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Analysisreport updated Successfully.'], 200);
                }
                return redirect()->route('form10.analysisreport.index')->with('success','The Analysisreport updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Analysisreport::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Analysisreport Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Analysisreport::where('status', '<>', -1)->get();
                        return view("dftqc.form10.analysisreport.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("dftqc.form10.analysisreport.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Analysisreport::findOrFail($id);
                        return view("dftqc.form10.analysisreport.ajax.edit", compact('data'))->render();
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
                            $data = Analysisreport::where('status', '<>', -1)->get();
                            $html = view("dftqc.form10.analysisreport.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Analysisreport::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Analysisreport Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Analysisreport::findOrFail($id);
                            $html = view("dftqc.form10.analysisreport.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Analysisreport::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Analysisreport updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Analysisreport::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Analysisreport Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        