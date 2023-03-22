<?php

namespace App\Models\Form4;

use App\Models\Hr\Employee;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\CreatedUpdatedBy;

class Recommendationfoodindustryestablishment extends Model
{
    use HasFactory, CreatedUpdatedBy;

    protected $table = 'tbl_recommendationfoodindustryestablishment';
    protected $primaryKey = 'recommendationfoodindustryestablishment_id';
    public $timestamps = true;
    protected $fillable = [
        'recommendationfoodindustryestablishment_status',
        'recommendationfoodindustryestablishment_remarks',
        'approved_by',
        'approved_date',
        'industryName',
        'industryAddress',
        'consumer_id',
        'industryOwnerName',
        'industryOwnerMiddleName',
        'industryOwnerLastName',
        'industryOwnerAddress',
        'productName',
        'productType',
        'machinery',
        'descriptionAndSourceOfRawMaterials',
        'techincialSkills',
        'cleanManagement',
        'industryBudget',
        'industryCapacity',
        'applicantName',
        'applicantAddress',
        'createdOn',
        'createdBy',
        'alias',
        'status',
        'remarks',
        'created_at',
        'updated_at',
        'updatedBy',

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

    // public function consumer()
    // {
    //     return $this->belongsTo(User::class, 'consumer_id', 'id');
    // }
}
