<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            //module_id = 1
            'Master' => [

                'country' => [
                    'master.country.index',
                    'master.country.create',
                    'master.country.show',
                    'master.country.store',
                    'master.country.edit ',
                    'master.country.update',
                    'master.country.destroy',
                ],
                'state' => [
                    'master.state.index',
                    'master.state.create',
                    'master.state.show',
                    'master.state.store',
                    'master.state.edit ',
                    'master.state.update',
                    'master.state.destroy',
                    'master.state.getState'
                ],
                'district' => [
                    'master.district.index',
                    'master.district.create',
                    'master.district.show',
                    'master.district.store',
                    'master.district.edit ',
                    'master.district.update',
                    'master.district.destroy',
                    'master.district.getDistrict',
                ],
                'city' => [
                    'master.city.index',
                    'master.city.create',
                    'master.city.show',
                    'master.city.store',
                    'master.city.edit ',
                    'master.city.update',
                    'master.city.destroy',
                    'master.city.getCity',
                ],

            ], //hr start

            'Hr' => [
                'department' => [
                    'hr.department.index',
                    'hr.department.create',
                    'hr.department.show',
                    'hr.department.store',
                    'hr.department.edit ',
                    'hr.department.update',
                    'hr.department.destroy',

                ],
                'designation' => [
                    'hr.designation.index',
                    'hr.designation.create',
                    'hr.designation.show',
                    'hr.designation.store',
                    'hr.designation.edit ',
                    'hr.designation.update',
                    'hr.designation.destroy',

                ],
                'employee' => [
                    'hr.employee.index',
                    'hr.employee.create',
                    'hr.employee.show',
                    'hr.employee.store',
                    'hr.employee.edit ',
                    'hr.employee.update',
                    'hr.employee.destroy',

                ],
                'applicant' => [
                    'hr.applicant.index',
                    'hr.applicant.create',
                    'hr.applicant.show',
                    'hr.applicant.store',
                    'hr.applicant.edit ',
                    'hr.applicant.update',
                    'hr.applicant.destroy',

                ],
            ],

            'settings' => [
                'users' => [
                    'settings-users-index',
                    'settings-users-create',
                    'settings-users-store',
                    'settings-users-show',
                    'settings-users-edit ',
                    'settings-users-update',
                    'settings-users-destroy',

                ],
                'permission' => [
                    'settings-permission-index',
                    'settings-permission-create',
                    'settings-permission-store',
                    'settings-permission-show',
                    'settings-permission-edit ',
                    'settings-permission-update',
                    'settings-permission-destroy',

                ],
                'role' => [
                    'settings-role-index',
                    'settings-role-create',
                    'settings-role-store',
                    'settings-role-show',
                    'settings-role-edit ',
                    'settings-role-update',
                    'settings-role-destroy',

                ],
            ],

            'license' => [ //form 4
                'Industry Establishment Recommendation' => [
                    'ier-index',
                    'ier-create',
                    'ier-store',
                    'ier-show',
                    'ier-edit ',
                    'ier-update',
                    'ier-destroy',
                    'ier-tableview',
                ],
                'New License Issue' => [//form7
                    'nli-index',
                    'nli-create',
                    'nli-store',
                    'nli-show',
                    'nli-edit ',
                    'nli-update',
                    'nli-destroy',
                    'nli-forwarded',
                    'nli-approve',
                    'nli-reject',
                ],
                'Licensing Food Industry' => [//form2
                    'lfi-index',
                    'lfi-create',
                    'lfi-store',
                    'lfi-show',
                    'lfi-edit ',
                    'lfi-update',
                    'lfi-forwarded',
                    'lfi-approve',
                    'lfi-reject',
                ],
                'Licensing Inspection Branch' => [//form9
                    'lib-index',
                    'lib-create',
                    'lib-store',
                    'lib-show',
                    'lib-edit ',
                    'lib-update',
                    'lib-forwarded',
                    'lib-approve',
                    'lib-reject',
                ],
                'Renewal Food Industry License' => [//form5
                    'rfil-index',
                    'rfil-create',
                    'rfil-store',
                    'rfil-show',
                    'rfil-edit ',
                    'rfil-update',
                    'rfil-forwarded',
                    'rfil-approve',
                    'rfil-reject',
                ],
                'Recommendation Food Industry Establishment' => [//form4
                    'rfie-index',
                    'rfie-create',
                    'rfie-store',
                    'rfie-show',
                    'rfie-edit ',
                    'rfie-update',
                    'rfie-forwarded',
                    'rfie-approve',
                    'rfie-reject',
                ],
                'Regarding Issuance License' => [//form8
                    'ril-index',
                    'ril-create',
                    'ril-store',
                    'ril-show',
                    'ril-edit ',
                    'ril-update',
                    'ril-forwarded',
                    'ril-approve',
                    'ril-reject',
                ],
            ],
                'Inspection' => [ //form 
                    
                    'Food Industry Inspection Report' => [//form1
                        'fiir-index',
                        'fiir-create',
                        'fiir-store',
                        'fiir-show',
                        'fiir-edit ',
                        'fiir-update',
                        'fiir-destroy',
                    ],
                    'Reference Lab' => [//form3
                        'referenceLab-index',
                        'referenceLab-create',
                        'referenceLab-store',
                        'referenceLab-show',
                        'referenceLab-edit ',
                        'referenceLab-update',
                        'referenceLab-destroy',
                    ],
                ],
                'Law Suit' => [ //form 
                    
                    'Analysis Report' => [//form1
                        'analysis-index',
                        'analysis-create',
                        'analysis-store',
                        'analysis-show',
                        'analysis-edit ',
                        'analysis-update',
                        'analysis-destroy',
                    ],
                ]




        ];

        $moduleID = 1;
        foreach ($permissions as $mkey => $modules) {
            foreach ($modules as $gkey => $models) {
                foreach ($models as $model) {
                    $slug = slugify($model);
                    $permissionName = ucwords(str_replace(".", " ", "$model"));
                    $pemArr = [
                        'name' => $permissionName,
                        'slug' => $slug,
                        'group_name' => $gkey,
                        'guard_name' => 'web',
                        'module_id' => $moduleID,
                        'createdOn' => now(),
                        'createdBy' => '1',
                        'updatedBy' => '1',
                        'status' => '1',
                    ];
                    $permission = Permission::where('slug', $slug)->first();
                    if ($permission)
                        $permission->update($pemArr);
                    else
                        Permission::create($pemArr);
                }
            }

            $moduleID++;
        }
    }
}
