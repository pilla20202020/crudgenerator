<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
        <th class="tb-col"><span class="overline-title">S.N.</span></th>
<th class="tb-col"><span class="overline-title">industryName</span></th>
<th class="tb-col"><span class="overline-title">addressTwo</span></th>
<th class="tb-col"><span class="overline-title">propritorName</span></th>
<th class="tb-col"><span class="overline-title">management</span></th>
<th class="tb-col"><span class="overline-title">estalishedDate</span></th>
<th class="tb-col"><span class="overline-title">sanatathagharelu</span></th>
<th class="tb-col"><span class="overline-title">majhaula</span></th>
<th class="tb-col"><span class="overline-title">thulo</span></th>
<th class="tb-col"><span class="overline-title">liyeko</span></th>
<th class="tb-col"><span class="overline-title">naliyeko</span></th>
<th class="tb-col"><span class="overline-title">renew</span></th>
<th class="tb-col"><span class="overline-title">nonRenew</span></th>
<th class="tb-col"><span class="overline-title">technical</span></th>
<th class="tb-col"><span class="overline-title">prasasanik</span></th>
<th class="tb-col"><span class="overline-title">sn</span></th>
<th class="tb-col"><span class="overline-title">products</span></th>
<th class="tb-col"><span class="overline-title">brand</span></th>
<th class="tb-col"><span class="overline-title">time</span></th>
<th class="tb-col"><span class="overline-title">area</span></th>
<th class="tb-col"><span class="overline-title">packagingOne</span></th>
<th class="tb-col"><span class="overline-title">packagingTwo</span></th>
<th class="tb-col"><span class="overline-title">udhyogOne</span></th>
<th class="tb-col"><span class="overline-title">udhyogTwo</span></th>
<th class="tb-col"><span class="overline-title">productionOne</span></th>
<th class="tb-col"><span class="overline-title">productionTwo</span></th>
<th class="tb-col"><span class="overline-title">batchNumberOne</span></th>
<th class="tb-col"><span class="overline-title">upayog</span></th>
<th class="tb-col"><span class="overline-title">samrichan</span></th>
<th class="tb-col"><span class="overline-title">potential</span></th>
<th class="tb-col"><span class="overline-title">proyog</span></th>
<th class="tb-col"><span class="overline-title">swasthya</span></th>
<th class="tb-col"><span class="overline-title">highlow</span></th>
<th class="tb-col"><span class="overline-title">swikrit</span></th>
<th class="tb-col"><span class="overline-title">sarsafai</span></th>
<th class="tb-col"><span class="overline-title">tapkram</span></th>
<th class="tb-col"><span class="overline-title">chara</span></th>
<th class="tb-col"><span class="overline-title">timespan</span></th>
<th class="tb-col"><span class="overline-title">hygiene</span></th>
<th class="tb-col"><span class="overline-title">chetra</span></th>
<th class="tb-col"><span class="overline-title">bathroom</span></th>
<th class="tb-col"><span class="overline-title">condition</span></th>
<th class="tb-col"><span class="overline-title">productName</span></th>
<th class="tb-col"><span class="overline-title">productSouce</span></th>
<th class="tb-col"><span class="overline-title">praichad</span></th>
<th class="tb-col"><span class="overline-title">prayog</span></th>
<th class="tb-col"><span class="overline-title">sample</span></th>
<th class="tb-col"><span class="overline-title">conclusion</span></th>
<th class="tb-col"><span class="overline-title">date</span></th>
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
<td class="tb-col">{{ $item->addressTwo }}</td>
<td class="tb-col">{{ $item->propritorName }}</td>
<td class="tb-col">{{ $item->management }}</td>
<td class="tb-col">{{ $item->estalishedDate }}</td>
<td class="tb-col">{{ $item->sanatathagharelu }}</td>
<td class="tb-col">{{ $item->majhaula }}</td>
<td class="tb-col">{{ $item->thulo }}</td>
<td class="tb-col">{{ $item->liyeko }}</td>
<td class="tb-col">{{ $item->naliyeko }}</td>
<td class="tb-col">{{ $item->renew }}</td>
<td class="tb-col">{{ $item->nonRenew }}</td>
<td class="tb-col">{{ $item->technical }}</td>
<td class="tb-col">{{ $item->prasasanik }}</td>
<td class="tb-col">{{ $item->sn }}</td>
<td class="tb-col">{{ $item->products }}</td>
<td class="tb-col">{{ $item->brand }}</td>
<td class="tb-col">{{ $item->time }}</td>
<td class="tb-col">{{ $item->area }}</td>
<td class="tb-col">{{ $item->packagingOne }}</td>
<td class="tb-col">{{ $item->packagingTwo }}</td>
<td class="tb-col">{{ $item->udhyogOne }}</td>
<td class="tb-col">{{ $item->udhyogTwo }}</td>
<td class="tb-col">{{ $item->productionOne }}</td>
<td class="tb-col">{{ $item->productionTwo }}</td>
<td class="tb-col">{{ $item->batchNumberOne }}</td>
<td class="tb-col">{{ $item->upayog }}</td>
<td class="tb-col">{{ $item->samrichan }}</td>
<td class="tb-col">{{ $item->potential }}</td>
<td class="tb-col">{{ $item->proyog }}</td>
<td class="tb-col">{{ $item->swasthya }}</td>
<td class="tb-col">{{ $item->highlow }}</td>
<td class="tb-col">{{ $item->swikrit }}</td>
<td class="tb-col">{{ $item->sarsafai }}</td>
<td class="tb-col">{{ $item->tapkram }}</td>
<td class="tb-col">{{ $item->chara }}</td>
<td class="tb-col">{{ $item->timespan }}</td>
<td class="tb-col">{{ $item->hygiene }}</td>
<td class="tb-col">{{ $item->chetra }}</td>
<td class="tb-col">{{ $item->bathroom }}</td>
<td class="tb-col">{{ $item->condition }}</td>
<td class="tb-col">{{ $item->productName }}</td>
<td class="tb-col">{{ $item->productSouce }}</td>
<td class="tb-col">{{ $item->praichad }}</td>
<td class="tb-col">{{ $item->prayog }}</td>
<td class="tb-col">{{ $item->sample }}</td>
<td class="tb-col">{{ $item->conclusion }}</td>
<td class="tb-col">{{ $item->date }}</td>
<td class="tb-col">{{ $item->alias }}</td>
<td class="tb-col">{!! $item->status_name !!}</td>
<td class="tb-col">
                <ul class="d-flex flex-wrap ">
                <li><a href="{{route('form1.foodindustryinspectionreport..show',[$item->foodindustryinspectionreport._id])}}" type="button" class="btn btn-color-success btn-hover-success btn-icon btn-soft" ><em class="icon ni ni-eye"></em></a></li>
                 <li><a href="{{route('form1.foodindustryinspectionreport..edit',[$item->foodindustryinspectionreport._id])}}" type="button" class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                <li><button type="button" data-route="{{route('form1.foodindustryinspectionreport..destroy',[$item->foodindustryinspectionreport._id])}}" class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em class="icon ni ni-trash"></em></button></li>
               </ul> </td>
               </tr>

        @endforeach

    </tbody>
</table>