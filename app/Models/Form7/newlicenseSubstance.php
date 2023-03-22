<?php

namespace App\Models\Form7;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;

class NewlicenseSubstance extends Model
{
    use HasFactory, CreatedUpdatedBy;

    protected $table = 'tbl_newlicensesubstance';
    protected $primaryKey = 'newlicensesubstance_id ';
    public $timestamps = true;
    protected $fillable =[
        'newlicenseissue_id',
'createdOn',
'foodNameOne',
'packingSizeOne',
'brandOne',
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
}

