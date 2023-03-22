<?php
        namespace App\Models\Form8;

        use App\Models\User;
        use Illuminate\Database\Eloquent\Casts\Attribute;
        use Illuminate\Database\Eloquent\Factories\HasFactory;
        use Illuminate\Database\Eloquent\Model;
        use App\Traits\CreatedUpdatedBy;

        class Regardingissuancelicense extends Model
        {
            use HasFactory, CreatedUpdatedBy;

            protected $table = 'tbl_regardingissuancelicense';
            protected $primaryKey = 'regardingissuancelicense_id';
            public $timestamps = true;
            protected $fillable =[
                'regardingissuancelicense_status',
                'industryName',
'industryAddress',
'enrollmentDate',
'submissionDate',
'inspectionReport',
'consumer_id',
'nameOfInspector',
'dateOfInspection',
'correctionDate',
'certificateNo',
'dissatisfaction',
'satisfaction',
'foodName',
'labelName',
'packingSize',
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