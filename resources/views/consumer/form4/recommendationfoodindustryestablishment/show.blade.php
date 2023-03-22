@extends('consumer.layouts.employee.employee')
@section('content')
<div class="nk-content">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-between flex-wrap gap g-2">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title">{{ __('lang.Recommendationfoodindustryestablishment') }}</h1>
                                <nav>
                                    <ol class="breadcrumb breadcrumb-arrow mb-0">
                                        <li class="breadcrumb-item"><a href="#">{{ __('lang.Recommendationfoodindustryestablishment') }}</a></li>
                                        <li class="breadcrumb-item"><a href="#">{{ __('lang.Recommendationfoodindustryestablishment') }} {{ __('lang.Manage') }}</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ __('lang.Recommendationfoodindustryestablishment') }}
                                        </li>
                                    </ol>
                                </nav>
                        </div>
                        <div class="nk-block-head-content">
                        <ul class="d-flex gap-2">
                        <a type="button" class="btn btn-soft btn-info" href="{{route('consumer.dashboard')}}"><em class="icon ni ni-arrow-left"></em> <span>Dashboard</span></a>
                       </ul>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="card h-100">
                        <div class="offcanvas-body" data-simplebar>
                            <div class="nk-block-head-content w-100">
                                <div class="d-flex justify-content-between p-4">

                                    <h2>{{ __('lang.Recommendationfoodindustryestablishment') }}
                                        {{ __('lang.Details') }}</h2>
                                    <button class="btn btn-primary print_pdf">Print PDF</button>
                                </div>
                                <div class="card w-100">
                                    <div class="p-5">

                                        <!-- <div class="card-head">
                        <h2 class="text-center">{{ $data['industryName'] }}</h2>
                    </div> -->
                                        <div class="card-body p-3">
                                            <!-- content Start -->
                                            
                                            <div class="row g-3">
                                                <div class="col-md-9">
                                                    <p>
                                                        श्रीमान महानिर्देशक ज्यु ,
                                                    </p>
                                                    <p>
                                                        (महाशाखा/ शाखा प्रमुख ज्यु )
                                                    </p>
                                                    <p>
                                                        खाद्य प्रविधि तथा गुण नियन्त्रण बिभाग
                                                    </p>
                                                    <p>
                                                        बबरमहल काठमाडौँ |

                                                    </p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        मिति: <span>{{ $data->date }}</span>
                                                    </p>
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <p>बिषय: खाद्य उद्योग स्थापना गर्न सिफारिश पाउंँ |</p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p>महोदय ,</p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p>



                                                        हामीले/मैले निम्न विवरण बमोजिमका खाद्य पर्दाथ उत्पादन/प्रशोधन
                                                        विक्री वितरण गर्न चाहेकोले खाद्य नियमावली २०२७ को नियम २ को
                                                        उपनियम (२) बमोजिम उद्योग स्थापनार्थ घरेलु तथा साना उद्योग
                                                        कार्यालयको नाउँमा सिफारिश गरी पाउन उक्त कार्यालयमा दिने उद्योग
                                                        दर्ता निवेदन फाराम (ख) को प्रतिलिपि साथै राखी रु. १० /- को टिकट
                                                        टाँसी यो निवेदन पेश गरेको छौ/छु । उद्योग स्थापना पश्चात नियमावली
                                                        २०२७ को नियम (२८) (४) बमोजिम अनुज्ञापत्र लिई मात्र उत्पादित
                                                        खाद्य पदार्थ विक्री वितरण गरिने व्यहोरा अनुरोध गर्दछौ /छु ।



                                                    </p>

                                                </div>
                                                <div class="col-md-12">
                                                    विवरण :

                                                </div>
                                                
                                                <div class="col-md-12">
                                                    १. उद्योगको नाम: <span>{{ $data->industryName }}</span>
                                                </div>
                                                <div class="col-md-12">
                                                    २. ठेगाना: <span>{{ $data->industryAddress }}</span>
                                                </div>
                                                <div class="col-md-12">
                                                    ३. उद्योगपतिको


                                                </div>
                                                <div class="col-md-12">
                                                    <P class="form-check-label">क. नाम थर:
                                                        <span>{{ $data->industryOwnerName }}
                                                            {{ $data->industryOwnerMiddleName }}
                                                            {{ $data->industryOwnerLastName }}</span>
                                                    </P>
                                                    <P class="form-check-label">ख.
                                                        ठेगाना:<span>{{ $data->industryOwnerAddress }}</span></P>

                                                </div>
                                                <div class="col-md-12">
                                                    <p>४. उत्पादन गर्न चाहेको खाद्य पदार्थको नाम:
                                                        <span>{{ $data->productName }}</span>
                                                    </p>


                                                </div>
                                                <div class="col-md-12">
                                                    <p>
                                                        ५. उद्योगको किसिम : <span>{{ $data->productType }}</span>
                                                    </p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p>६. उद्योगको लागि चाहने मेसीनरी:
                                                        <span>{{ $data->machinery }}</span>
                                                    </p>

                                                </div>
                                                <div class="col-md-12">
                                                    <p>७. प्राबिधिक सीप (तालिम अनुभव आधि ):
                                                        <span>{{ $data->techincialSkills }}</span>
                                                    </p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p>८. सरसफाईको व्यवस्था: <span>{{ $data->cleanManagement }}</span>
                                                    </p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p>९. कच्चा पदार्थको विवरण र श्रोत :
                                                        <span>{{ $data->descriptionAndSourceOfRawMaterials }}</span>
                                                    </p>

                                                </div>
                                                <div class="col-md-12">
                                                    <p>१० उद्योगको पुंजी: <span>{{ $data->industryBudget }}</span></p>

                                                </div>


                                                <div class="col-md-12">
                                                    <p>११. उद्योगको क्ष्यमता:
                                                        <span>{{ $data->industryCapacity }}</span>
                                                    </p>
                                                </div>
                                                <div class="col-md-12">
                                                    <p>१२ अन्य: <span>{{ $data->remarks }}</span> </p>
                                                </div>
                                                <div class="col-md-12 d-flex justify-content-end">
                                                    <div>
                                                        <p>निवेदक: <span></span> </p>
                                                        <p>सही: <span>__________________</span></p>
                                                        <p>नाम: <span>{{ $data->applicantName }}</span></p>
                                                        <p>ठेगाना: <span>{{ $data->applicantAddress }}</span> </p>

                                                    </div>
                                                </div>



                                            </div>








                                            <!-- content End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--machinery and description of raw materials repeater code -->
<script>
    $(document).on('click', '#additemrow', function() {
        var b = parseFloat($("#temp").val());
        b = b + 1;
        $("#temp").val(b);
        var temp = $("#temp").val();
        var tst = `<div class="form-group row d-flex align-items-end appended-row mt-2">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon"
                    aria-describedby="button-addon1" name="machinery[]" id="machinery">
                   <button id="additemrow" class="btn btn-outline-primary" type="button" id="button-addon1"><em class="icon ni ni-plus"></em></button> <button class="removeitemrow btn btn-outline-danger" type="button" id="button-addon1"><em class="icon ni ni-minus"></em></button>
            </div>

            </div>`

        $('#additernary').append(tst);
    });

    //for description of food

    $(document).on('click', '#adddesc', function() {
        var b = parseFloat($("#temp_desc").val());
        b = b + 1;
        $("#temp_desc").val(b);
        var temp = $("#temp_desc").val();
        var tst = `<div class="form-group row d-flex align-items-end descappended-row mt-2">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon"
                    aria-describedby="button-addon1" name="descriptionAndSourceOfRawMaterials[]" id="descriptionAndSourceOfRawMaterials">    <button id="adddesc" class="btn btn-outline-primary" type="button" id="button-addon1"><em class="icon ni ni-plus"></em></button>
                <button class="descremoveitemrow btn btn-outline-danger" type="button" id="button-addon1"><em class="icon ni ni-minus"></em></button>
            </div>
            </div>`

        $('#adddescription').append(tst);
    });

    $(document).on('click', '.removeitemrow', function() {
        $(this).closest('.appended-row').remove();
    })

    $(document).on('click', '.descremoveitemrow', function() {
        $(this).closest('.descappended-row').remove();
    })

    function remove_product(o) {
        var p = o.parentNode.parentNode;
        p.parentNode.removeChild(p);
    }

    function remove_productforedit(o) {
        var p = o.parentNode.parentNode;
        p.parentNode.removeChild(p);
    }
</script>
<!--machinery and description of raw materials repeater code -->


@endsection

