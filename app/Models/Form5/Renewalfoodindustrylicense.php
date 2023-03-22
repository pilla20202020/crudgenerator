<?php

namespace App\Models\Form5;

use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\CreatedUpdatedBy;

class Renewalfoodindustrylicense extends Model
{
    use HasFactory, CreatedUpdatedBy;

    protected $table = 'tbl_renewalfoodindustrylicense';
    protected $primaryKey = 'renewalfoodindustrylicense_id';
    public $timestamps = true;
    protected $fillable = [
        'renewalfoodindustrylicense_status',
        'industryName',
        'renewalfoodindustrylicense_id',
        'tole',
        'consumer_id',
        'municipality',
        'district',
        'phone',
        'type',
        'ownerName',
        'addressTwo',
        'fatherName',
        'grandFatherName',
        'addressThree',
        'addressFour',
        'ediblesOne',
        'packingOne',
        'brandOne',
        'machinery',
        'paramater',
        'skill',
        'skills',
        'sanitation',
        'manufacture',
        'udhyog',
        'potential',
        'issueDate',
        'receipt',
        'production',
        'label',
        'sample',
        'photocopy',
        'issueDate_image',
        'receipt_image',
        'production_image',
        'label_image',
        'sample_image',
        'photocopy_image',
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

    public function substanceDetail()
    {
        return $this->hasMany(SubstanceDetail::class,'renewalfoodindustrylicense_id','renewalfoodindustrylicense_id');
    }
}
