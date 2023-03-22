<form action="{{ route('master.state.update', [$data->state_id]) }}" id="updateCustomForm">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_country', 'country_id', 'countryName', '', $data,'Country Name') !!}
            {{ createErrorParagraph('country_id', '') }}
        </div>
        <div class="col-lg-6">{{ createText('stateName', 'stateName', 'State Name', '', $data->stateName) }}
            {{ createErrorParagraph('stateName', '') }}
        </div>
        <div class="col-lg-6">
            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'], $data->status) }}
            {{ createErrorParagraph('status', '') }}
        </div>
        <div class="col-lg-6">{{ createText('remarks', 'remarks', 'Remarks', '', $data->remarks) }}
            {{ createErrorParagraph('remarks', '') }}
        </div>
        <div class="col-md-12"><?php createButton('btn-primary btn-update', '', 'Submit'); ?>
        </div>
</form>
