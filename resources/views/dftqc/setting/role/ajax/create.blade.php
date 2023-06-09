<form action="{{ route('setting.role.store') }}" id="storeCustomForm">
    @csrf
    <div class="row">
        <div class="col-lg-6">{{ createText('name', 'name', 'Role Name', '', $role->name ?? '') }}
        </div>


        <div class="col-lg-6">
            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'], $role->status ?? '') }}
        </div>
        <div class="col-lg-12">
            {{ createLabel('remarks', 'form-label col-form-label', 'Remarks') }}
            {{ createTextArea('remarks', 'remarks', 'remarks', '', $role->remarks ?? '') }}
        </div>
        
       
  
       

        <div class="pt-5  nk-block-head-between flex-wrap gap g-2">

            <div class="nk-block-head-content ">
                <h2 class="nk-block-title">Permissions</h2>
            </div>
    
        </div>

        <!-- Accordion -->
        <div class="accordion" id="accordionExample">
           

            @php
                $moduleName = '';
                $moduleId = [];
                $counter = 0;
            @endphp

            <?php $count = 0; ?>
            @foreach ($modules as $module)
                @php
                    $groupPermissions = \App\Models\Permission::join('tbl_module', 'permissions.module_id', 'tbl_module.module_id')
                        ->where('tbl_module.module_id', '=', $module)
                        ->where('permissions.status', '<>', -1)
                        ->orderBy('tbl_module.module_id', 'asc')
                        ->select('moduleName', 'permissions.*')
                        ->get()
                        ->groupBy('group_name')
                        ->chunk(3);
                    
                    $moduleObj = \App\Models\Master\Module::findOrFail($module);
                    
                @endphp
                <div class="accordion-item">

                    <h2 class="accordion-header"> <button class="accordion-button bg-light bg-gradient bg-opacity-25" type="button"
                            data-bs-toggle="collapse" data-bs-target="#dftqc-{{ $count }}">
                            {{ $moduleObj->moduleName }} </button> </h2>
                    <div id="dftqc-{{ $count }}" class="accordion-collapse collapse "
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @foreach ($groupPermissions as $chunk)
                                <div class="row mt-3 g-3">

                                    @foreach ($chunk as $title => $group)
                                        <div class="col-xs-6 col-sm-4 col-md-4 mb-3">

                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input"
                                                    data-checkbox-group="{{ Str::slug($title) }}" data-role="selectall">
                                                <label
                                                    class="overrole-title form-check-label h5 font-weight-bold text-danger"
                                                    for="permission">{{ ucfirst($title) }}</label>
                                            </div>

                                            @foreach ($group as $permission)
                                                <div class="form-group form-check" style="margin-left: 20px">
                                                    <input type="checkbox" class="form-check-input"
                                                        name="permissions[{{ $permission->slug }}]"
                                                        value="{{ $permission->id }}"
                                                        {{ isset($role) &&$role->permissions()->whereSlug($permission->slug)->first()? 'checked': '' }}
                                                        data-checkbox-group="{{ Str::slug($title) }}"
                                                        data-role="select">
                                                    <label class="form-check-label"
                                                        for="{{ $permission->slug }}">{{ $permission->slug }}</label>
                                                </div>
                                            @endforeach

                                        </div>
                                    @endforeach

                                </div>
                                <?php $count++; ?>
                            @endforeach
                        </div>
                    </div>

                </div>
                <!-- End Accordion -->
            @endforeach


        </div>
        <div class="col-lg-6"><?php createButton('btn-primary btn-store', '', 'Add'); ?>
        </div>
</form>

<script type="text/javascript">
    $(document).ready(function() {

        $("[data-role=selectall]").change(function() {
            var $thisgroup = $("[data-checkbox-group=" + $(this).data('checkbox-group') +
                "][data-role=select]");
            if (this.checked) {
                $thisgroup.each(function() {
                    this.checked = true;
                })
            } else {
                $thisgroup.each(function() {
                    this.checked = false;
                })
            }
        });

        $("[data-checkbox-group]").change(function() {
            var $thisgroup = $("[data-checkbox-group=" + $(this).data('checkbox-group') +
                "][data-role=select]");
            var $thisselectall = $("[data-checkbox-group=" + $(this).data('checkbox-group') +
                "][data-role=selectall]");
            if ($(this).is(":checked")) {
                var isAllChecked = 0;
                $thisgroup.each(function() {
                    if (!this.checked)
                        isAllChecked = 1;
                });
                if (isAllChecked == 0) {
                    $thisselectall.prop("checked", true);
                }
            } else {
                $thisselectall.prop("checked", false);
            }
        });

        $('.card-body').on('click', function(e) {
            $('[data-toggle="popover"]').each(function() {
                if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover')
                    .has(e.target).length === 0) {
                    $(this).popover('hide');
                }
            });
        });

        $("[data-checkbox-group][data-role=select]").trigger('change');
    });
</script>
<style>
    .custom-module {
        margin-top: 1rem;
        padding: 1rem;
        background-color: antiquewhite;
    }
</style>
