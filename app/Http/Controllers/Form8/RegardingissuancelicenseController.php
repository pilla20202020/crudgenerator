<?php
        namespace App\Http\Controllers\Form8;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Form8\Regardingissuancelicense;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class RegardingissuancelicenseController extends Controller
        {
           public function index(Request $request)
            {
                $data = Regardingissuancelicense::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("dftqc.form8.regardingissuancelicense.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form8.regardingissuancelicense.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("dftqc.form8.regardingissuancelicense.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form8.regardingissuancelicense.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->regardingissuancelicenseName)]);
                Regardingissuancelicense::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Regardingissuancelicense Created Successfully.'], 200);
                }
                return redirect()->route('form8.regardingissuancelicense.index')->with('success','The Regardingissuancelicense created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Regardingissuancelicense::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("dftqc.form8.regardingissuancelicense.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form8.regardingissuancelicense.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Regardingissuancelicense::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("dftqc.form8.regardingissuancelicense.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form8.regardingissuancelicense.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Regardingissuancelicense::findOrFail($id);
                $request->request->add(['alias' => slugify($request->regardingissuancelicenseName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Regardingissuancelicense updated Successfully.'], 200);
                }
                return redirect()->route('form8.regardingissuancelicense.index')->with('success','The Regardingissuancelicense updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Regardingissuancelicense::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Regardingissuancelicense Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Regardingissuancelicense::where('status', '<>', -1)->get();
                        return view("dftqc.form8.regardingissuancelicense.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("dftqc.form8.regardingissuancelicense.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Regardingissuancelicense::findOrFail($id);
                        return view("dftqc.form8.regardingissuancelicense.ajax.edit", compact('data'))->render();
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
                            $data = Regardingissuancelicense::where('status', '<>', -1)->get();
                            $html = view("dftqc.form8.regardingissuancelicense.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Regardingissuancelicense::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Regardingissuancelicense Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Regardingissuancelicense::findOrFail($id);
                            $html = view("dftqc.form8.regardingissuancelicense.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Regardingissuancelicense::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Regardingissuancelicense updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Regardingissuancelicense::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Regardingissuancelicense Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        