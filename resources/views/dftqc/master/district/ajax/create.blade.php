<form action="{{ route('master.district.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_country', 'country_id', 'countryName', '','','Country Name') !!}
            {{ createErrorParagraph('country_id', '') }}
        </div>
        <div class="col-lg-6">{!! getSelectForForeignColumn('tbl_state', 'state_id', 'stateName', '','','State Name') !!}
            {{ createErrorParagraph('state_id', '') }}
        </div>
        <div class="col-lg-6">{{ createText('districtName', 'districtName', 'District Name') }}
            {{ createErrorParagraph('districtName', '') }}</div>
        <div class="col-lg-6">{{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive']) }}
            {{ createErrorParagraph('status', '') }}
        </div>
        <div class="col-lg-6">{{ createText('remarks', 'remarks', 'Remarks') }}
            {{ createErrorParagraph('remarks', '') }}</div> <br>
        <div class="col-md-12"><?php createButton('btn-primary btn-store', '', 'Submit'); ?>
        </div>
</form>
