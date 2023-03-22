@extends('dftqc.partials.layouts')
        @section('content')
            <div class="nk-content">
                <div class="container">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-between flex-wrap gap g-2">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title">lang.Renewalfoodindustrylicense</h1>
                                            <nav>
                                                <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                    <li class="breadcrumb-item"><a href="#">lang.Renewalfoodindustrylicense</a></li>
                                                    <li class="breadcrumb-item"><a href="#">lang.Renewalfoodindustrylicense Manage</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">lang.Renewalfoodindustrylicense
                                                    </li>
                                                </ol>
                                            </nav>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="d-flex">
                                            <li><a href="{{route('form5.renewalfoodindustrylicense.create')}}" class="btn btn-md d-md-none btn-primary" data-bs-toggle="modal"
                                                    data-bs-target=""><em
                                                        class="icon ni ni-plus"></em><span>Add</span></a></li>
                                            <li><a href="{{route('form5.renewalfoodindustrylicense.create')}}"
                                                    class="btn btn-primary d-none d-md-inline-flex"><em
                                                        class="icon ni ni-plus"></em><span>Add lang.Renewalfoodindustrylicense</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block">
                                <div class="card">
                                    <table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
                                        <thead class="table-light">
                                            <tr>
                                            <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">industryName</span></th>
<th class="tb-col"><span class="overline-title">tole</span></th>
<th class="tb-col"><span class="overline-title">municipality</span></th>
<th class="tb-col"><span class="overline-title">district</span></th>
<th class="tb-col"><span class="overline-title">phone</span></th>
<th class="tb-col"><span class="overline-title">type</span></th>
<th class="tb-col"><span class="overline-title">ownerName</span></th>
<th class="tb-col"><span class="overline-title">addressTwo</span></th>
<th class="tb-col"><span class="overline-title">fatherName</span></th>
<th class="tb-col"><span class="overline-title">grandFatherName</span></th>
<th class="tb-col"><span class="overline-title">addressThree</span></th>
<th class="tb-col"><span class="overline-title">addressFour</span></th>
<th class="tb-col"><span class="overline-title">ediblesOne</span></th>
<th class="tb-col"><span class="overline-title">ediblesTwo</span></th>
<th class="tb-col"><span class="overline-title">ediblessThree</span></th>
<th class="tb-col"><span class="overline-title">packingOne</span></th>
<th class="tb-col"><span class="overline-title">packingTwo</span></th>
<th class="tb-col"><span class="overline-title">packingThree</span></th>
<th class="tb-col"><span class="overline-title">brandOne</span></th>
<th class="tb-col"><span class="overline-title">brandTwo</span></th>
<th class="tb-col"><span class="overline-title">brandThree</span></th>
<th class="tb-col"><span class="overline-title">skill</span></th>
<th class="tb-col"><span class="overline-title">skills</span></th>
<th class="tb-col"><span class="overline-title">sanitation</span></th>
<th class="tb-col"><span class="overline-title">manufacture</span></th>
<th class="tb-col"><span class="overline-title">udhyog</span></th>
<th class="tb-col"><span class="overline-title">potential</span></th>
<th class="tb-col"><span class="overline-title">issueDate</span></th>
<th class="tb-col"><span class="overline-title">receipt</span></th>
<th class="tb-col"><span class="overline-title">production</span></th>
<th class="tb-col"><span class="overline-title">label</span></th>
<th class="tb-col"><span class="overline-title">sample</span></th>
<th class="tb-col"><span class="overline-title">photocopy</span></th>
<th class="tb-col"><span class="overline-title">alias</span></th>
<th class="tb-col"><span class="overline-title">status</span></th>
<th class="tb-col" data-sortable="false"><span
                                                                                                class="overline-title">Action</span>
                                            </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($data as $item)
                                            <tr>
                                                <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->industryName }}</td>
<td class="tb-col">{{ $item->tole }}</td>
<td class="tb-col">{{ $item->municipality }}</td>
<td class="tb-col">{{ $item->district }}</td>
<td class="tb-col">{{ $item->phone }}</td>
<td class="tb-col">{{ $item->type }}</td>
<td class="tb-col">{{ $item->ownerName }}</td>
<td class="tb-col">{{ $item->addressTwo }}</td>
<td class="tb-col">{{ $item->fatherName }}</td>
<td class="tb-col">{{ $item->grandFatherName }}</td>
<td class="tb-col">{{ $item->addressThree }}</td>
<td class="tb-col">{{ $item->addressFour }}</td>
<td class="tb-col">{{ $item->ediblesOne }}</td>
<td class="tb-col">{{ $item->ediblesTwo }}</td>
<td class="tb-col">{{ $item->ediblessThree }}</td>
<td class="tb-col">{{ $item->packingOne }}</td>
<td class="tb-col">{{ $item->packingTwo }}</td>
<td class="tb-col">{{ $item->packingThree }}</td>
<td class="tb-col">{{ $item->brandOne }}</td>
<td class="tb-col">{{ $item->brandTwo }}</td>
<td class="tb-col">{{ $item->brandThree }}</td>
<td class="tb-col">{{ $item->skill }}</td>
<td class="tb-col">{{ $item->skills }}</td>
<td class="tb-col">{{ $item->sanitation }}</td>
<td class="tb-col">{{ $item->manufacture }}</td>
<td class="tb-col">{{ $item->udhyog }}</td>
<td class="tb-col">{{ $item->potential }}</td>
<td class="tb-col">{{ $item->issueDate }}</td>
<td class="tb-col">{{ $item->receipt }}</td>
<td class="tb-col">{{ $item->production }}</td>
<td class="tb-col">{{ $item->label }}</td>
<td class="tb-col">{{ $item->sample }}</td>
<td class="tb-col">{{ $item->photocopy }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                    <ul class="d-flex flex-wrap ">
                                                    <li><a href="{{route('form5.renewalfoodindustrylicense.show',[$item->renewalfoodindustrylicense_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                                                     <li><a href="{{route('form5.renewalfoodindustrylicense.edit',[$item->renewalfoodindustrylicense_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                                                    <li><button type="button" data-route="{{route('form5.renewalfoodindustrylicense.destroy',[$item->renewalfoodindustrylicense_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
                                                   </ul> </td>
                                                   </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        