@extends('dftqc.partials.layouts')
        @section('content')
            <div class="nk-content">
                <div class="container">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-between flex-wrap gap g-2">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title">lang.Newlicenseissue</h1>
                                            <nav>
                                                <ol class="breadcrumb breadcrumb-arrow mb-0">
                                                    <li class="breadcrumb-item"><a href="#">lang.Newlicenseissue</a></li>
                                                    <li class="breadcrumb-item"><a href="#">lang.Newlicenseissue Manage</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">lang.Newlicenseissue
                                                    </li>
                                                </ol>
                                            </nav>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="d-flex">
                                            <li><a href="{{route('form7.newlicenseissue.create')}}" class="btn btn-md d-md-none btn-primary" data-bs-toggle="modal"
                                                    data-bs-target=""><em
                                                        class="icon ni ni-plus"></em><span>Add</span></a></li>
                                            <li><a href="{{route('form7.newlicenseissue.create')}}"
                                                    class="btn btn-primary d-none d-md-inline-flex"><em
                                                        class="icon ni ni-plus"></em><span>Add lang.Newlicenseissue</span></a></li>
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
<th class="tb-col"><span class="overline-title">industryAddressTol</span></th>
<th class="tb-col"><span class="overline-title">MunicipalityVDC</span></th>
<th class="tb-col"><span class="overline-title">industryDistrict</span></th>
<th class="tb-col"><span class="overline-title">industryAddress</span></th>
<th class="tb-col"><span class="overline-title">industryType</span></th>
<th class="tb-col"><span class="overline-title">industryManagerFirstName</span></th>
<th class="tb-col"><span class="overline-title">industryManagerMiddleName</span></th>
<th class="tb-col"><span class="overline-title">industryManagerLastName</span></th>
<th class="tb-col"><span class="overline-title">industryManagerAddress</span></th>
<th class="tb-col"><span class="overline-title">fatherName</span></th>
<th class="tb-col"><span class="overline-title">grandFatherName</span></th>
<th class="tb-col"><span class="overline-title">permanentAddress</span></th>
<th class="tb-col"><span class="overline-title">temporaryAddress</span></th>
<th class="tb-col"><span class="overline-title">foodNameOne</span></th>
<th class="tb-col"><span class="overline-title">foodNameTwo</span></th>
<th class="tb-col"><span class="overline-title">foodNameThree</span></th>
<th class="tb-col"><span class="overline-title">packingSizeOne</span></th>
<th class="tb-col"><span class="overline-title">packingSizeTwo</span></th>
<th class="tb-col"><span class="overline-title">packingSizeThree</span></th>
<th class="tb-col"><span class="overline-title">brandOne</span></th>
<th class="tb-col"><span class="overline-title">brandTwo</span></th>
<th class="tb-col"><span class="overline-title">brandThree</span></th>
<th class="tb-col"><span class="overline-title">industryMachineOne</span></th>
<th class="tb-col"><span class="overline-title">industryMachineTwo</span></th>
<th class="tb-col"><span class="overline-title">industryMachineThree</span></th>
<th class="tb-col"><span class="overline-title">industryMachineFour</span></th>
<th class="tb-col"><span class="overline-title">industryManageOne</span></th>
<th class="tb-col"><span class="overline-title">industryManageTwo</span></th>
<th class="tb-col"><span class="overline-title">industryManageThree</span></th>
<th class="tb-col"><span class="overline-title">industryManageFour</span></th>
<th class="tb-col"><span class="overline-title">labManage</span></th>
<th class="tb-col"><span class="overline-title">labWorksOne</span></th>
<th class="tb-col"><span class="overline-title">labWorksTwo</span></th>
<th class="tb-col"><span class="overline-title">labWorksThree</span></th>
<th class="tb-col"><span class="overline-title">industryCost</span></th>
<th class="tb-col"><span class="overline-title">industryCapacity</span></th>
<th class="tb-col"><span class="overline-title">userName</span></th>
<th class="tb-col"><span class="overline-title">userAddress</span></th>
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
<td class="tb-col">{{ $item->industryAddressTol }}</td>
<td class="tb-col">{{ $item->MunicipalityVDC }}</td>
<td class="tb-col">{{ $item->industryDistrict }}</td>
<td class="tb-col">{{ $item->industryAddress }}</td>
<td class="tb-col">{{ $item->industryType }}</td>
<td class="tb-col">{{ $item->industryManagerFirstName }}</td>
<td class="tb-col">{{ $item->industryManagerMiddleName }}</td>
<td class="tb-col">{{ $item->industryManagerLastName }}</td>
<td class="tb-col">{{ $item->industryManagerAddress }}</td>
<td class="tb-col">{{ $item->fatherName }}</td>
<td class="tb-col">{{ $item->grandFatherName }}</td>
<td class="tb-col">{{ $item->permanentAddress }}</td>
<td class="tb-col">{{ $item->temporaryAddress }}</td>
<td class="tb-col">{{ $item->foodNameOne }}</td>
<td class="tb-col">{{ $item->foodNameTwo }}</td>
<td class="tb-col">{{ $item->foodNameThree }}</td>
<td class="tb-col">{{ $item->packingSizeOne }}</td>
<td class="tb-col">{{ $item->packingSizeTwo }}</td>
<td class="tb-col">{{ $item->packingSizeThree }}</td>
<td class="tb-col">{{ $item->brandOne }}</td>
<td class="tb-col">{{ $item->brandTwo }}</td>
<td class="tb-col">{{ $item->brandThree }}</td>
<td class="tb-col">{{ $item->industryMachineOne }}</td>
<td class="tb-col">{{ $item->industryMachineTwo }}</td>
<td class="tb-col">{{ $item->industryMachineThree }}</td>
<td class="tb-col">{{ $item->industryMachineFour }}</td>
<td class="tb-col">{{ $item->industryManageOne }}</td>
<td class="tb-col">{{ $item->industryManageTwo }}</td>
<td class="tb-col">{{ $item->industryManageThree }}</td>
<td class="tb-col">{{ $item->industryManageFour }}</td>
<td class="tb-col">{{ $item->labManage }}</td>
<td class="tb-col">{{ $item->labWorksOne }}</td>
<td class="tb-col">{{ $item->labWorksTwo }}</td>
<td class="tb-col">{{ $item->labWorksThree }}</td>
<td class="tb-col">{{ $item->industryCost }}</td>
<td class="tb-col">{{ $item->industryCapacity }}</td>
<td class="tb-col">{{ $item->userName }}</td>
<td class="tb-col">{{ $item->userAddress }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                                                    <ul class="d-flex flex-wrap ">
                                                    <li><a href="{{route('form7.newlicenseissue.show',[$item->newlicenseissue_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                                                     <li><a href="{{route('form7.newlicenseissue.edit',[$item->newlicenseissue_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                                                    <li><button type="button" data-route="{{route('form7.newlicenseissue.destroy',[$item->newlicenseissue_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
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
        