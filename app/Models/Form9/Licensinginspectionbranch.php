<?php
        namespace App\Models\Form9;

        use App\Models\User;
        use Illuminate\Database\Eloquent\Casts\Attribute;
        use Illuminate\Database\Eloquent\Factories\HasFactory;
        use Illuminate\Database\Eloquent\Model;
        use App\Traits\CreatedUpdatedBy;

        class Licensinginspectionbranch extends Model
        {
            use HasFactory, CreatedUpdatedBy;

            protected $table = 'tbl_licensinginspectionbranch';
            protected $primaryKey = 'licensinginspectionbranch_id';
            public $timestamps = true;
            protected $fillable =[
                'date',
                'ownerName',
                'consumer_id',
                'industryName',
'industryAddress',
'industryPhone',
'more',
'flow',
'personalHg',
'products',
'machinery',
'foods',
'labelInformation',
'plantLocation',
'createdOn',
'createdBy',
'alias',
'status',
'remarks',
'created_at',
'updated_at',
'updatedBy',
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