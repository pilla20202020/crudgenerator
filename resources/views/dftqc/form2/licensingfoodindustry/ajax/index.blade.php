<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">number</span></th>
<th class="tb-col"><span class="overline-title">date</span></th>
<th class="tb-col"><span class="overline-title">industryName</span></th>
<th class="tb-col"><span class="overline-title">address</span></th>
<th class="tb-col"><span class="overline-title">ownerName</span></th>
<th class="tb-col"><span class="overline-title">responsiblePersonName</span></th>
<th class="tb-col"><span class="overline-title">fatherName</span></th>
<th class="tb-col"><span class="overline-title">grandFatherName</span></th>
<th class="tb-col"><span class="overline-title">permanentAddress</span></th>
<th class="tb-col"><span class="overline-title">temporaryAddress</span></th>
<th class="tb-col"><span class="overline-title">producedFoodName</span></th>
<th class="tb-col"><span class="overline-title">sign</span></th>
<th class="tb-col"><span class="overline-title">fingerPrint</span></th>
<th class="tb-col"><span class="overline-title">directorGeneral</span></th>
<th class="tb-col"><span class="overline-title">other</span></th>
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
            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->number }}</td>
<td class="tb-col">{{ $item->date }}</td>
<td class="tb-col">{{ $item->industryName }}</td>
<td class="tb-col">{{ $item->address }}</td>
<td class="tb-col">{{ $item->ownerName }}</td>
<td class="tb-col">{{ $item->responsiblePersonName }}</td>
<td class="tb-col">{{ $item->fatherName }}</td>
<td class="tb-col">{{ $item->grandFatherName }}</td>
<td class="tb-col">{{ $item->permanentAddress }}</td>
<td class="tb-col">{{ $item->temporaryAddress }}</td>
<td class="tb-col">{{ $item->producedFoodName }}</td>
<td class="tb-col">{{ $item->sign }}</td>
<td class="tb-col">{{ $item->fingerPrint }}</td>
<td class="tb-col">{{ $item->directorGeneral }}</td>
<td class="tb-col">{{ $item->other }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('form2.licensingfoodindustry.show',[$item->licensingfoodindustry_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('form2.licensingfoodindustry.edit',[$item->licensingfoodindustry_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('form2.licensingfoodindustry.destroy',[$item->licensingfoodindustry_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>