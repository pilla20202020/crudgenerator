<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">industryName</span></th>
<th class="tb-col"><span class="overline-title">industryAddress</span></th>
<th class="tb-col"><span class="overline-title">enrollmentDate</span></th>
<th class="tb-col"><span class="overline-title">submissionDate</span></th>
<th class="tb-col"><span class="overline-title">nameOfInspector</span></th>
<th class="tb-col"><span class="overline-title">dateOfInspection</span></th>
<th class="tb-col"><span class="overline-title">correctionDate</span></th>
<th class="tb-col"><span class="overline-title">certificateNo</span></th>
<th class="tb-col"><span class="overline-title">dissatisfaction</span></th>
<th class="tb-col"><span class="overline-title">satisfaction</span></th>
<th class="tb-col"><span class="overline-title">foodName</span></th>
<th class="tb-col"><span class="overline-title">labelName</span></th>
<th class="tb-col"><span class="overline-title">packingSize</span></th>
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
<td class="tb-col">{{ $item->enrollmentDate }}</td>
<td class="tb-col">{{ $item->submissionDate }}</td>
<td class="tb-col">{{ $item->nameOfInspector }}</td>
<td class="tb-col">{{ $item->dateOfInspection }}</td>
<td class="tb-col">{{ $item->correctionDate }}</td>
<td class="tb-col">{{ $item->certificateNo }}</td>
<td class="tb-col">{{ $item->dissatisfaction }}</td>
<td class="tb-col">{{ $item->satisfaction }}</td>
<td class="tb-col">{{ $item->foodName }}</td>
<td class="tb-col">{{ $item->labelName }}</td>
<td class="tb-col">{{ $item->packingSize }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('form8.regardingissuancelicense.show',[$item->regardingissuancelicense_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('form8.regardingissuancelicense.edit',[$item->regardingissuancelicense_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('form8.regardingissuancelicense.destroy',[$item->regardingissuancelicense_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>