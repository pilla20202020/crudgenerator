@extends('dftqc.partials.layouts')
        @section('content')
            <div class="nk-content">
                <div class="container">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-between flex-wrap gap g-2">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title">lang.Establishmentrecommendations</h1>
                                            <nav>
                                                <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                    <li class="breadcrumb-item"><a href="#">lang.Establishmentrecommendations</a></li>
                                                    <li class="breadcrumb-item"><a href="#">lang.Establishmentrecommendations Manage</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">lang.Establishmentrecommendations
                                                    </li>
                                                </ol>
                                            </nav>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="d-flex">
                                            <li><a href="{{route('form6.establishmentrecommendations.create')}}" class="btn btn-md d-md-none btn-primary" data-bs-toggle="modal"
                                                    data-bs-target=""><em
                                                        class="icon ni ni-plus"></em><span>Add</span></a></li>
                                            <li><a href="{{route('form6.establishmentrecommendations.create')}}"
                                                    class="btn btn-primary d-none d-md-inline-flex"><em
                                                        class="icon ni ni-plus"></em><span>Add lang.Establishmentrecommendations</span></a></li>
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
<th class="tb-col"><span class="overline-title">chalaninoOne</span></th>
<th class="tb-col"><span class="overline-title">date</span></th>
<th class="tb-col"><span class="overline-title">industryName</span></th>
<th class="tb-col"><span class="overline-title">industryWork</span></th>
<th class="tb-col"><span class="overline-title">industryOwner</span></th>
<th class="tb-col"><span class="overline-title">recommendationDate</span></th>
<th class="tb-col"><span class="overline-title">etc</span></th>
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
                                                <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->chalaninoOne }}</td>
<td class="tb-col">{{ $item->date }}</td>
<td class="tb-col">{{ $item->industryName }}</td>
<td class="tb-col">{{ $item->industryWork }}</td>
<td class="tb-col">{{ $item->industryOwner }}</td>
<td class="tb-col">{{ $item->recommendationDate }}</td>
<td class="tb-col">{{ $item->etc }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                    <ul class="d-flex flex-wrap ">
                                                    <li><a href="{{route('form6.establishmentrecommendations.show',[$item->establishmentrecommendations_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                                                     <li><a href="{{route('form6.establishmentrecommendations.edit',[$item->establishmentrecommendations_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                                                    <li><button type="button" data-route="{{route('form6.establishmentrecommendations.destroy',[$item->establishmentrecommendations_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
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
        