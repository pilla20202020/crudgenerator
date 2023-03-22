<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">industryName</span></th>
<th class="tb-col"><span class="overline-title">industryAddress</span></th>
<th class="tb-col"><span class="overline-title">industryOwnerName</span></th>
<th class="tb-col"><span class="overline-title">industryOwnerMiddleName</span></th>
<th class="tb-col"><span class="overline-title">industryOwnerLastName</span></th>
<th class="tb-col"><span class="overline-title">industryOwnerAddress</span></th>
<th class="tb-col"><span class="overline-title">productName</span></th>
<th class="tb-col"><span class="overline-title">productType</span></th>
<th class="tb-col"><span class="overline-title">machinery</span></th>
<th class="tb-col"><span class="overline-title">descriptionAndSourceOfRawMaterials</span></th>
<th class="tb-col"><span class="overline-title">techincialSkills</span></th>
<th class="tb-col"><span class="overline-title">cleanManagement</span></th>
<th class="tb-col"><span class="overline-title">industryBudget</span></th>
<th class="tb-col"><span class="overline-title">industryCapacity</span></th>
<th class="tb-col"><span class="overline-title">floatingInput</span></th>
<th class="tb-col"><span class="overline-title">applicantName</span></th>
<th class="tb-col"><span class="overline-title">applicantAddress</span></th>
<th class="tb-col"><span class="overline-title">alias</span></th>
<th class="tb-col"><span class="overline-title">status</span></th>
<th class="tb-col" data-sortable="false"><span
                    class="overline-title">Action</span></th>
        </tr>
    </thead>
    <tbody>
        @php
            $i = 1;
        @endphp
        @foreach ($data as $item)
        <tr>
            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->industryName }}</td>
<td class="tb-col">{{ $item->industryAddress }}</td>
<td class="tb-col">{{ $item->industryOwnerName }}</td>
<td class="tb-col">{{ $item->industryOwnerMiddleName }}</td>
<td class="tb-col">{{ $item->industryOwnerLastName }}</td>
<td class="tb-col">{{ $item->industryOwnerAddress }}</td>
<td class="tb-col">{{ $item->productName }}</td>
<td class="tb-col">{{ $item->productType }}</td>
<td class="tb-col">{{ $item->machinery }}</td>
<td class="tb-col">{{ $item->descriptionAndSourceOfRawMaterials }}</td>
<td class="tb-col">{{ $item->techincialSkills }}</td>
<td class="tb-col">{{ $item->cleanManagement }}</td>
<td class="tb-col">{{ $item->industryBudget }}</td>
<td class="tb-col">{{ $item->industryCapacity }}</td>
<td class="tb-col">{{ $item->floatingInput }}</td>
<td class="tb-col">{{ $item->applicantName }}</td>
<td class="tb-col">{{ $item->applicantAddress }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('form4.recommendationfoodindustryestablishment.show',[$item->recommendationfoodindustryestablishment_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('form4.recommendationfoodindustryestablishment.edit',[$item->recommendationfoodindustryestablishment_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('form4.recommendationfoodindustryestablishment.destroy',[$item->recommendationfoodindustryestablishment_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>