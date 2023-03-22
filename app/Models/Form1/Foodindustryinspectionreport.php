<?php
        namespace App\Models\Form1;

        use App\Models\User;
        use Illuminate\Database\Eloquent\Casts\Attribute;
        use Illuminate\Database\Eloquent\Factories\HasFactory;
        use Illuminate\Database\Eloquent\Model;
        use App\Traits\CreatedUpdatedBy;

        class Foodindustryinspectionreport extends Model
        {
            use HasFactory, CreatedUpdatedBy;

            protected $table = 'tbl_foodindustryinspectionreport';
            protected $primaryKey = 'foodindustryinspectionreport_id';
            public $timestamps = true;
            protected $fillable =[
                'industryName',
'addressTwo',
'consumer_id',
'propritorName',
'management',
'estalishedDate',
'industryFormat',
'sanatathagharelu',
'majhaula',
'thulo',
'manufactureDate',
'technical',
'prasasanik',
'products',
'brand',
'time',
'license',
'area',
'packagingWay',
'industryNameAddress',
'packagingOne',
'packagingTwo',
'udhyogOne',
'udhyogTwo',
'productionOne',
'productionTwo',
'batchNumberOne',
'upayog',
'samrichan',
'potential',
'proyog',
'swasthya',
'highlow',
'swikrit',
'sarsafai',
'tapkram',
'chara',
'timespan',
'hygiene',
'chetra',
'bathroom',
'condition',
'productName',
'productSouce',
'praichad',
'prakashHawa',
'prayog',
'sample',
'conclusion',
'date',
'createdOn',
'createdBy',
'alias',
'status',
'remarks',
'created_at',
'updated_at',
'updatedBy',
'foodindustryinspectionreport_status',
'approved_by',
'approved_date',

            ];

            protected $appends = ['status_name'];

            protected function getStatusNameAttribute()
            {
                return $this->status == 1 ? '<span class="badge text-bg-success-soft"> Active </span>' : '<span class="badge text-bg-danger-soft">Inactive</span>';
            }

    protected function createdBy(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>  User::find($value) ? User::find($value)->name : '',
        );
    }

    protected function updatedBy(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => User::find($value) ? User::find($value)->name : '',
        );
    }
        }