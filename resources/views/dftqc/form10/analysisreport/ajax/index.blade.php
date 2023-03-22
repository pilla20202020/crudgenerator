<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">sampleDetails</span></th>
<th class="tb-col"><span class="overline-title">invoiceDate</span></th>
<th class="tb-col"><span class="overline-title">sampleRegistartionDate</span></th>
<th class="tb-col"><span class="overline-title">sampleCode</span></th>
<th class="tb-col"><span class="overline-title">packingCondition</span></th>
<th class="tb-col"><span class="overline-title">analysisRequired</span></th>
<th class="tb-col"><span class="overline-title">analysisStartDate</span></th>
<th class="tb-col"><span class="overline-title">analysisEndDate</span></th>
<th class="tb-col"><span class="overline-title">parameter</span></th>
<th class="tb-col"><span class="overline-title">testMethod</span></th>
<th class="tb-col"><span class="overline-title">theUnit</span></th>
<th class="tb-col"><span class="overline-title">output</span></th>
<th class="tb-col"><span class="overline-title">prescribedcriteria</span></th>
<th class="tb-col"><span class="overline-title">mood</span></th>
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
            <td class="tb-col">{{ $i++ }}</td><td class="tb-col">{{ $item->sampleDetails }}</td>
<td class="tb-col">{{ $item->invoiceDate }}</td>
<td class="tb-col">{{ $item->sampleRegistartionDate }}</td>
<td class="tb-col">{{ $item->sampleCode }}</td>
<td class="tb-col">{{ $item->packingCondition }}</td>
<td class="tb-col">{{ $item->analysisRequired }}</td>
<td class="tb-col">{{ $item->analysisStartDate }}</td>
<td class="tb-col">{{ $item->analysisEndDate }}</td>
<td class="tb-col">{{ $item->parameter }}</td>
<td class="tb-col">{{ $item->testMethod }}</td>
<td class="tb-col">{{ $item->theUnit }}</td>
<td class="tb-col">{{ $item->output }}</td>
<td class="tb-col">{{ $item->prescribedcriteria }}</td>
<td class="tb-col">{{ $item->mood }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('form10.analysisreport.show',[$item->analysisreport_id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('form10.analysisreport.edit',[$item->analysisreport_id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('form10.analysisreport.destroy',[$item->analysisreport_id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>