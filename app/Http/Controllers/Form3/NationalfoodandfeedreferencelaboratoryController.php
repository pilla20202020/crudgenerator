<?php
        namespace App\Http\Controllers\Form3;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Form3\Nationalfoodandfeedreferencelaboratory;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class NationalfoodandfeedreferencelaboratoryController extends Controller
        {
           public function index(Request $request)
            {
                $data = Nationalfoodandfeedreferencelaboratory::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("dftqc.form3.nationalfoodandfeedreferencelaboratory.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form3.nationalfoodandfeedreferencelaboratory.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("dftqc.form3.nationalfoodandfeedreferencelaboratory.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form3.nationalfoodandfeedreferencelaboratory.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->nationalfoodandfeedreferencelaboratoryName)]);
                Nationalfoodandfeedreferencelaboratory::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Nationalfoodandfeedreferencelaboratory Created Successfully.'], 200);
                }
                return redirect()->route('form3.nationalfoodandfeedreferencelaboratory.index')->with('success','The Nationalfoodandfeedreferencelaboratory created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Nationalfoodandfeedreferencelaboratory::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("dftqc.form3.nationalfoodandfeedreferencelaboratory.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form3.nationalfoodandfeedreferencelaboratory.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Nationalfoodandfeedreferencelaboratory::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("dftqc.form3.nationalfoodandfeedreferencelaboratory.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form3.nationalfoodandfeedreferencelaboratory.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Nationalfoodandfeedreferencelaboratory::findOrFail($id);
                $request->request->add(['alias' => slugify($request->nationalfoodandfeedreferencelaboratoryName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Nationalfoodandfeedreferencelaboratory updated Successfully.'], 200);
                }
                return redirect()->route('form3.nationalfoodandfeedreferencelaboratory.index')->with('success','The Nationalfoodandfeedreferencelaboratory updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Nationalfoodandfeedreferencelaboratory::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Nationalfoodandfeedreferencelaboratory Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Nationalfoodandfeedreferencelaboratory::where('status', '<>', -1)->get();
                        return view("dftqc.form3.nationalfoodandfeedreferencelaboratory.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("dftqc.form3.nationalfoodandfeedreferencelaboratory.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Nationalfoodandfeedreferencelaboratory::findOrFail($id);
                        return view("dftqc.form3.nationalfoodandfeedreferencelaboratory.ajax.edit", compact('data'))->render();
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
                            $data = Nationalfoodandfeedreferencelaboratory::where('status', '<>', -1)->get();
                            $html = view("dftqc.form3.nationalfoodandfeedreferencelaboratory.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Nationalfoodandfeedreferencelaboratory::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Nationalfoodandfeedreferencelaboratory Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Nationalfoodandfeedreferencelaboratory::findOrFail($id);
                            $html = view("dftqc.form3.nationalfoodandfeedreferencelaboratory.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Nationalfoodandfeedreferencelaboratory::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Nationalfoodandfeedreferencelaboratory updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Nationalfoodandfeedreferencelaboratory::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Nationalfoodandfeedreferencelaboratory Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        