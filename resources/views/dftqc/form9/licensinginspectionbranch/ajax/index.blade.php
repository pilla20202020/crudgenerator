<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">industryName</span></th>
<th class="tb-col"><span class="overline-title">industryAddress</span></th>
<th class="tb-col"><span class="overline-title">industryPhone</span></th>
<th class="tb-col"><span class="overline-title">more</span></th>
<th class="tb-col"><span class="overline-title">flow</span></th>
<th class="tb-col"><span class="overline-title">personalHg</span></th>
<th class="tb-col"><span class="overline-title">products</span></th>
<th class="tb-col"><span class="overline-title">machinery</span></th>
<th class="tb-col"><span class="overline-title">foods</span></th>
<th class="tb-col"><span class="overline-title">plantLocation</span></th>
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
<td class="tb-col">{{ $item->industryPhone }}</td>
<td class="tb-col">{{ $item->more }}</td>
<td class="tb-col">{{ $item->flow }}</td>
<td class="tb-col">{{ $item->personalHg }}</td>
<td class="tb-col">{{ $item->products }}</td>
<td class="tb-col">{{ $item->machinery }}</td>
<td class="tb-col">{{ $item->foods }}</td>
<td class="tb-col">{{ $item->plantLocation }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('form9.licensinginspectionbranch.show',[$item->licensinginspectionbranch_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('form9.licensinginspectionbranch.edit',[$item->licensinginspectionbranch_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('form9.licensinginspectionbranch.destroy',[$item->licensinginspectionbranch_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>