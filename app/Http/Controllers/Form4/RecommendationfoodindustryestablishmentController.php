<?php
        namespace App\Http\Controllers\Form4;
        use App\Http\Controllers\Controller;
use App\Mail\CommonMail;
use Illuminate\Http\Request;
        use App\Models\Form4\Recommendationfoodindustryestablishment;
        use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

        class RecommendationfoodindustryestablishmentController extends Controller
        {
           public function index(Request $request)
            {
                $data = Recommendationfoodindustryestablishment::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("dftqc.form4.recommendationfoodindustryestablishment.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form4.recommendationfoodindustryestablishment.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("dftqc.form4.recommendationfoodindustryestablishment.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form4.recommendationfoodindustryestablishment.create");
            }

            public function store(Request $request)
            {
                // $validator = Validator::make($request->all(), [
                //     'industryName' => 'required',
                //     'industryAddress' => 'required',
                //     'industryOwnerLastName'=>'required',
                //     'productName'=>'required',
                //     'productType'=>'required',
                //     'techincialSkills'=>'required',
                //     'industryCapacity'=>'required',
                //     'industryBudget'=>'required',
                //     'applicantName'=>'required',
                //     'machinery'=>'required',
                //     'descriptionAndSourceOfRawMaterials'=>'required',
                //     'cleanManagement'=>'required',
                //     'industryOwnerName'=>'required',
                //     'applicantAddress'=>'required',
                // ]);

                // if ($validator->fails()) {
                //     return response()->json([
                //         'error' => $validator->errors()->all(),
                //     ]);
                // }

                if ($request->machinery) {
                    $machinery = collect($request->machinery);
                }

                if (isset($machinery)) {
                    $request['machinery'] = $machinery->implode(',');
                }

                if ($request->descriptionAndSourceOfRawMaterials) {
                    $descriptionAndSourceOfRawMaterials = collect($request->descriptionAndSourceOfRawMaterials);
                }

                if (isset($descriptionAndSourceOfRawMaterials)) {
                    $request['descriptionAndSourceOfRawMaterials'] = $descriptionAndSourceOfRawMaterials->implode(',');
                }
                $request['consumer_id'] = auth()->user()->id;

                $request->request->add(['alias' => slugify($request->recommendationfoodindustryestablishmentName)]);
                Recommendationfoodindustryestablishment::create($request->all());
                // dd($request->ajax());

                // if ($request->ajax()) {
                //     return response()->json(['status' => true, 'message' => 'The Recommendationfoodindustryestablishment Created Successfully.'], 200);
                // }
                
                return redirect()->route('consumer.form7.newlicenseissue.index')->with('success','The Recommendationfoodindustryestablishment created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Recommendationfoodindustryestablishment::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("dftqc.form4.recommendationfoodindustryestablishment.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form4.recommendationfoodindustryestablishment.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Recommendationfoodindustryestablishment::findOrFail($id);
                $descriptionAndSourceOfRawMaterials = explode(',', $data->descriptionAndSourceOfRawMaterials);
                $machinery = explode(',', $data->machinery);
                if ($request->ajax()) {
                    $html = view("dftqc.form4.recommendationfoodindustryestablishment.ajax.edit", compact('data','machinery','descriptionAndSourceOfRawMaterials'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("dftqc.form4.recommendationfoodindustryestablishment.edit", compact('data','machinery','descriptionAndSourceOfRawMaterials'));
            }


            public function update(Request $request, $id)
            {
                $data = Recommendationfoodindustryestablishment::findOrFail($id);
                $data->machinery = null;
                $data->descriptionAndSourceOfRawMaterials = null;

                if ($request->machinery) {
                    $machinery = collect($request->machinery);
                }

                if (isset($machinery)) {
                    $request['machinery'] = $machinery->implode(',');
                }

                if ($request->descriptionAndSourceOfRawMaterials) {
                    $descriptionAndSourceOfRawMaterials = collect($request->descriptionAndSourceOfRawMaterials);
                }

                if (isset($descriptionAndSourceOfRawMaterials)) {
                    $request['descriptionAndSourceOfRawMaterials'] = $descriptionAndSourceOfRawMaterials->implode(',');
                }

                $request->request->add(['alias' => slugify($request->recommendationfoodindustryestablishmentName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Recommendationfoodindustryestablishment updated Successfully.'], 200);
                }
                return redirect()->route('form4.recommendationfoodindustryestablishment.index')->with('success','The Recommendationfoodindustryestablishment updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Recommendationfoodindustryestablishment::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Recommendationfoodindustryestablishment Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Recommendationfoodindustryestablishment::where('status', '<>', -1)->get();
                        return view("dftqc.form4.recommendationfoodindustryestablishment.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("dftqc.form4.recommendationfoodindustryestablishment.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Recommendationfoodindustryestablishment::findOrFail($id);
                        return view("dftqc.form4.recommendationfoodindustryestablishment.ajax.edit", compact('data'))->render();
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
                            $data = Recommendationfoodindustryestablishment::where('status', '<>', -1)->get();
                            $html = view("dftqc.form4.recommendationfoodindustryestablishment.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Recommendationfoodindustryestablishment::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Recommendationfoodindustryestablishment Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Recommendationfoodindustryestablishment::findOrFail($id);
                            $html = view("dftqc.form4.recommendationfoodindustryestablishment.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Recommendationfoodindustryestablishment::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Recommendationfoodindustryestablishment updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Recommendationfoodindustryestablishment::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Recommendationfoodindustryestablishment Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
