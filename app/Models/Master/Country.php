<?php

namespace App\Models\Master;

use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\CreatedUpdatedBy;

class Country extends Model
{
    use HasFactory, CreatedUpdatedBy;

    protected $table = 'tbl_country';
    protected $primaryKey = 'country_id';
    public $timestamps = true;
    protected $fillable = [
        'countryName',
        'pdf',
        'alias',
        'createdOn',
        'createdBy',
        'updatedBy',
        'status',
        'remarks',
        'created_at',
        'updated_at',

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
