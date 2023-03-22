<?php
        namespace App\Http\Controllers\Form2;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Form2\Licensingfoodindustry;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class LicensingfoodindustryController extends Controller
        {
           public function index(Request $request)
            {
                $data = Licensingfoodindustry::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("dftqc.form2.licensingfoodindustry.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form2.licensingfoodindustry.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("dftqc.form2.licensingfoodindustry.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form2.licensingfoodindustry.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->licensingfoodindustryName)]);
                Licensingfoodindustry::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Licensingfoodindustry Created Successfully.'], 200);
                }
                return redirect()->route('form2.licensingfoodindustry.index')->with('success','The Licensingfoodindustry created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Licensingfoodindustry::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("dftqc.form2.licensingfoodindustry.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form2.licensingfoodindustry.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Licensingfoodindustry::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("dftqc.form2.licensingfoodindustry.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form2.licensingfoodindustry.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Licensingfoodindustry::findOrFail($id);
                $request->request->add(['alias' => slugify($request->licensingfoodindustryName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Licensingfoodindustry updated Successfully.'], 200);
                }
                return redirect()->route('form2.licensingfoodindustry.index')->with('success','The Licensingfoodindustry updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Licensingfoodindustry::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Licensingfoodindustry Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Licensingfoodindustry::where('status', '<>', -1)->get();
                        return view("dftqc.form2.licensingfoodindustry.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("dftqc.form2.licensingfoodindustry.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Licensingfoodindustry::findOrFail($id);
                        return view("dftqc.form2.licensingfoodindustry.ajax.edit", compact('data'))->render();
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
                            $data = Licensingfoodindustry::where('status', '<>', -1)->get();
                            $html = view("dftqc.form2.licensingfoodindustry.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Licensingfoodindustry::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Licensingfoodindustry Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Licensingfoodindustry::findOrFail($id);
                            $html = view("dftqc.form2.licensingfoodindustry.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Licensingfoodindustry::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Licensingfoodindustry updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Licensingfoodindustry::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Licensingfoodindustry Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        