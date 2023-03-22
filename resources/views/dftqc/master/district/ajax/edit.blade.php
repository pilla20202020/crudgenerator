<form action="{{ route('master.district.update', [$data->district_id]) }}" id="updateCustomForm">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_country', 'country_id', 'countryName', '', $data,'Country Name') !!}
            {{ createErrorParagraph('country_id', '') }}
        </div>
        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_state', 'state_id', 'stateName', '', $data,'State Name') !!}
            {{ createErrorParagraph('state_id', '') }}
        </div>
        <div class="col-lg-6">{{ createText('districtName', 'districtName', 'District Name', '', $data->districtName) }}
            {{ createErrorParagraph('districtName', '') }}
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
