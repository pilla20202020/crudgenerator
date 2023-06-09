<table class="datatable-init table" data-nk-container="table-responsive" id="CustomTable">
    <thead class="table-light">
        <tr>
            <th class="tb-col"><span class="overline-title">S.N.</span></th>
            <th class="tb-col"><span class="overline-title">tasksStartDate</span></th>
            <th class="tb-col"><span class="overline-title">tasksEndDate</span></th>
            <th class="tb-col"><span class="overline-title">department_id</span></th>
            <th class="tb-col"><span class="overline-title">tasksAssignedTo</span></th>
            <th class="tb-col"><span class="overline-title">companyName</span></th>
            <th class="tb-col"><span class="overline-title">alias</span></th>
            <th class="tb-col"><span class="overline-title">status</span></th>
            <th class="tb-col" data-sortable="false"><span class="overline-title">{{ __('lang.Action') }}</span></th>
        </tr>
    </thead>
    <tbody>
        @php
            $i = 1;
        @endphp
        @foreach ($data as $item)
            <tr>
                <td class="tb-col">{{ $i++ }}</td>
                <td class="tb-col">{{ $item->tasksStartDate }}</td>
                <td class="tb-col">{{ $item->tasksEndDate }}</td>
                <td class="tb-col">{{ $item->department_id }}</td>
                <td class="tb-col">{{ $item->tasksAssignedTo }}</td>
                <td class="tb-col">{{ $item->companyName }}</td>
                <td class="tb-col">{{ $item->alias }}</td>
                <td class="tb-col">{!! $item->status_name !!}</td>
                <td class="tb-col">
                    <ul class="d-flex flex-wrap ">
                        <li><a href="{{ route('work.tasks.show', [$item->tasks_id]) }}" type="button"
                                class="btn btn-color-success btn-hover-success btn-icon btn-soft"><em
                                    class="icon ni ni-eye"></em></a></li>
                        <li><a href="{{ route('work.tasks.edit', [$item->tasks_id]) }}" type="button"
                                class="btn btn-color-primary btn-hover-primary btn-icon btn-soft"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                title="Edit"> <em class="icon ni ni-edit"></em></a></li>
                        <li><button type="button" data-route="{{ route('work.tasks.destroy', [$item->tasks_id]) }}"
                                class="btn btn-color-danger btn-hover-danger btn-icon btn-soft"><em
                                    class="icon ni ni-trash"></em></button></li>
                    </ul>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
