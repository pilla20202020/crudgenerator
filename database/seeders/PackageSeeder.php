<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $package = [
            'name' => 'All',
        'price'=>'0.0',
        'description'=> 'All functionality',
        'feature'=>'1,2,3,4,5,6,7,8,9,10,11,2,13,14,15,16,17,18,19,20',
        'loginLimitNo'=> '0',
        'duration'=>'0',
        'createdOn'=> now(),
        'createdBy'=>1,
        'updatedBy'=>1,
        'alias' => 'all',
        'status' =>'1',
        'remarks' => 'all',
        ];
    }
}
