@extends('consumer.layouts.employee.employee')
@section('content')
<div class="nk-content">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="card">
                <div class="row g-gs">
                    <div class="col-xxl-12 text-center">
                        <div class="gap g-3">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title py-5 text-uppercase">Welcome, {{ auth()->user()->name }}</h2>
                            </div>

                        </div>
                    </div>


                    <div class="col-xxl-12">
                            <div class="card-body">
                                <ul class="d-flex flex-wrap gap g-3 justify-content-center">
                                    @if(isset($newregistration))
                                        <li>
                                            <a type="button" class="btn btn-soft btn-primary d-flex flex-column p-5" href="{{route('consumer.form4.recommendationfoodindustryestablishment.show', $newregistration->recommendationfoodindustryestablishment_id)}}">
                                                <em class="icon ni ni-building"></em><span>View Registration</span>
                                            </a>

                                            @if(isset($newregistration) && $newregistration->recommendationfoodindustryestablishment_status == null)
                                                <a type="button" class="btn btn-soft btn-primary d-flex flex-column p-5 mt-3" href="{{route('consumer.form4.recommendationfoodindustryestablishment.edit', $newregistration->recommendationfoodindustryestablishment_id)}}">
                                                    <em class="icon ni ni-building"></em><span>Edit Registration</span>
                                                </a>
                                            @endif
                                        </li>

                                    @else
                                        <li><a type="button" class="btn btn-soft btn-primary d-flex flex-column p-5" href="{{route('consumer.form4.recommendationfoodindustryestablishment.index')}}"><em class="icon ni ni-building"></em><span>New Registration</span></a></li>
                                    @endif

                                    @if(isset($newlisence))

                                    <li>
                                            <a type="button" class="btn btn-soft btn-warning d-flex flex-column p-5" href="{{route('consumer.form7.newlicenseissue.show', $newlisence->newlicenseissue_id)}}">
                                                <em class="icon ni ni-plus-c"></em><span>View License Issue</span>
                                            </a>

                                            @if($newlisence->newlisence_status == null)
                                                <a type="button" class="btn btn-soft btn-warning d-flex flex-column p-5 mt-3" href="{{route('consumer.form7.newlicenseissue.edit', $newlisence->newlicenseissue_id)}}">
                                                    <em class="icon ni ni-plus-c"></em><span>Edit License Issue</span>
                                                </a>
                                            @endif

                                        </li>
                                    @else
                                        <li><a type="button" class="btn btn-soft btn-warning d-flex flex-column p-5" href="{{route('consumer.form7.newlicenseissue.index')}}"><em class="icon ni ni-plus-c"></em><span>New License Issue</span></a></li>
                                    @endif



                                    <li><a type="button" class="btn btn-soft btn-success d-flex flex-column p-5" href="{{route('consumer.form5.renewalfoodindustrylicense.index')}}"><em class="icon ni ni-edit-alt"></em><span>Renew License</span></a></li>

                                    <!-- <li><a type="button" class="btn btn-soft btn-danger d-flex flex-column p-5" href="#"><em class="icon ni ni-policy"></em><span>Law Suite</span></a></li> -->
                                </ul>
                            </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    // Clock
    const clock = document.querySelector('.clock');

    //assigning time values to constants
    const tick = () => {
        const now = new Date();
        let h = now.getHours();
        const m = now.getMinutes();
        const s = now.getSeconds();
        let am_pm = 'AM';

        //transforming 24 hour clock into 12 hour clock
        if (h >= 12) {
            h -= 12;
            am_pm = "PM";
        };
        if (h == 0) {
            h = 12;
            am_pm = "AM";
        };

        //defining html for digital clock
        const html = `
    <span>${h}</span> :
    <span>${m}</span> :
    <span>${s}</span>
    <span class="ampm">${am_pm}</span>
    `;

        //printing html code inside div.clock
        clock.innerHTML = html;
    };

    //refreshing clock every 1 second
    setInterval(tick, 1000);
</script>
@endsection
