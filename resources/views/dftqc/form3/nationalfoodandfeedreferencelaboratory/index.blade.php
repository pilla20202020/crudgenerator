@extends('dftqc.partials.layouts')
        @section('content')
            <div class="nk-content">
                <div class="container">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-between flex-wrap gap g-2">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title">lang.Nationalfoodandfeedreferencelaboratory</h1>
                                            <nav>
                                                <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                    <li class="breadcrumb-item"><a href="#">lang.Nationalfoodandfeedreferencelaboratory</a></li>
                                                    <li class="breadcrumb-item"><a href="#">lang.Nationalfoodandfeedreferencelaboratory Manage</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">lang.Nationalfoodandfeedreferencelaboratory
                                                    </li>
                                                </ol>
                                            </nav>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="d-flex">
                                            <li><a href="{{route('form3.nationalfoodandfeedreferencelaboratory.create')}}" class="btn btn-md d-md-none btn-primary" data-bs-toggle="modal"
                                                    data-bs-target=""><em
                                                        class="icon ni ni-plus"></em><span>Add</span></a></li>
                                            <li><a href="{{route('form3.nationalfoodandfeedreferencelaboratory.create')}}"
                                                    class="btn btn-primary d-none d-md-inline-flex"><em
                                                        class="icon ni ni-plus"></em><span>Add lang.Nationalfoodandfeedreferencelaboratory</span></a></li>
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
<th class="tb-col"><span class="overline-title">sampleNumber</span></th>
<th class="tb-col"><span class="overline-title">date</span></th>
<th class="tb-col"><span class="overline-title">sampleDetails</span></th>
<th class="tb-col"><span class="overline-title">parameter</span></th>
<th class="tb-col"><span class="overline-title">examinationFee</span></th>
<th class="tb-col"><span class="overline-title">voucherNumber</span></th>
<th class="tb-col"><span class="overline-title">dateOfRemittanceRevenue</span></th>
<th class="tb-col"><span class="overline-title">other</span></th>
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
                                                <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->sampleNumber }}</td>
<td class="tb-col">{{ $item->date }}</td>
<td class="tb-col">{{ $item->sampleDetails }}</td>
<td class="tb-col">{{ $item->parameter }}</td>
<td class="tb-col">{{ $item->examinationFee }}</td>
<td class="tb-col">{{ $item->voucherNumber }}</td>
<td class="tb-col">{{ $item->dateOfRemittanceRevenue }}</td>
<td class="tb-col">{{ $item->other }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                    <ul class="d-flex flex-wrap ">
                                                    <li><a href="{{route('form3.nationalfoodandfeedreferencelaboratory.show',[$item->nationalfoodandfeedreferencelaboratory_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                                                     <li><a href="{{route('form3.nationalfoodandfeedreferencelaboratory.edit',[$item->nationalfoodandfeedreferencelaboratory_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                                                    <li><button type="button" data-route="{{route('form3.nationalfoodandfeedreferencelaboratory.destroy',[$item->nationalfoodandfeedreferencelaboratory_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
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
        