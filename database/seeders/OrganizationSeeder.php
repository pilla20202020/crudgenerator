<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Settings\Organization;
use Illuminate\Support\Str;
use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creating user
        $user = \App\Models\User::create([
            // 'User_type' => $arr[array_rand($arr,1),
            'User_type' => 'ADMIN',
            'name' => 'Super Admin',
            'mobile' => '9999999999',

            // 'email' => $this->faker->unique()->safeEmail(),
            'email' => 'superadmin@dftqc.com',
            'email_verified_at' => now(),
            'password' => '$2a$10$3jGELLamaNW96G4lDdOOhupYOhT9l6eFsfTayUdWydqkc6Jyht4Bu', // password
            'remember_token' => Str::random(10),
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        //creating role
        $role = Role::create([
            'name' => 'Super Admin', 'slug' => 'super-admin',
            'createdOn' => now(),
            'createdBy' => '1',
            'updatedBy' => '1',
        ]);


        $permissions = Permission::all();
        foreach ($permissions as $permission) {
            RolePermission::create([
                'role_id' => $role->id,
                'permission_id' => $permission->id,
            ]);
        }
        //Assingin user to Role
        $user->roles()->attach($role);

        $organization = [
        'user_id' => $user->id,
        'organizationName' => 'DFTQC',
        'organizatoinCategory' => '1',
        'ownerName' => 'Office',
        'phoneNumber' => '123456',
        'landLineNumber' => '123456',
        'emailAddress' => 'test@test',
        'password' => 'password',
        'faxAddress' => '3454234',
        'country_id' => '1',
        'state_id' => '3',
        'city_id' => '1',
        'district_id' => '1',
        'geoMapLocation' => '452626.3246',
        'logo' => null,
        'documentType' => null,
        'documentName' => null,
        'documentPath' => null,
        'budgetSize' => '0.0',
        'package_id' => 1,
        'workDays'=> null,
        'createdOn'=> now(),
        'createdBy'=> 1,
        'alias'=> 'dftqc',
        'status' => '1',
        'remarks' => null,
        'updatedBy' => 1,
    ];

    Organization::create($organization);
    }
}
