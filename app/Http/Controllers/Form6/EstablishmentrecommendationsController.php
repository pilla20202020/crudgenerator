<?php
        namespace App\Http\Controllers\Form6;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Form6\Establishmentrecommendations;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class EstablishmentrecommendationsController extends Controller
        {
           public function index(Request $request)
            {
                $data = Establishmentrecommendations::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("dftqc.form6.establishmentrecommendations.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form6.establishmentrecommendations.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("dftqc.form6.establishmentrecommendations.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form6.establishmentrecommendations.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->establishmentrecommendationsName)]);
                Establishmentrecommendations::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Establishmentrecommendations Created Successfully.'], 200);
                }
                return redirect()->route('form6.establishmentrecommendations.index')->with('success','The Establishmentrecommendations created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Establishmentrecommendations::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("dftqc.form6.establishmentrecommendations.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form6.establishmentrecommendations.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Establishmentrecommendations::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("dftqc.form6.establishmentrecommendations.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form6.establishmentrecommendations.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Establishmentrecommendations::findOrFail($id);
                $request->request->add(['alias' => slugify($request->establishmentrecommendationsName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Establishmentrecommendations updated Successfully.'], 200);
                }
                return redirect()->route('form6.establishmentrecommendations.index')->with('success','The Establishmentrecommendations updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Establishmentrecommendations::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Establishmentrecommendations Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Establishmentrecommendations::where('status', '<>', -1)->get();
                        return view("dftqc.form6.establishmentrecommendations.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("dftqc.form6.establishmentrecommendations.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Establishmentrecommendations::findOrFail($id);
                        return view("dftqc.form6.establishmentrecommendations.ajax.edit", compact('data'))->render();
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
                            $data = Establishmentrecommendations::where('status', '<>', -1)->get();
                            $html = view("dftqc.form6.establishmentrecommendations.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Establishmentrecommendations::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Establishmentrecommendations Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Establishmentrecommendations::findOrFail($id);
                            $html = view("dftqc.form6.establishmentrecommendations.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Establishmentrecommendations::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Establishmentrecommendations updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Establishmentrecommendations::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Establishmentrecommendations Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        