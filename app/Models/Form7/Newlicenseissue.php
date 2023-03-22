<?php

namespace App\Models\Form7;

use App\Models\Hr\Employee;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\CreatedUpdatedBy;

class Newlicenseissue extends Model
{
    use HasFactory, CreatedUpdatedBy;

    protected $table = 'tbl_newlicenseissue';
    protected $primaryKey = 'newlicenseissue_id';
    public $timestamps = true;
    protected $fillable = [
        'industryName',
        'consumer_id',
        'industryAddressTol',
        'MunicipalityVDC',
        'industryDistrict',
        'company_logo',
        'industryAddress',
        'industryType',
        'industryManagerFirstName',
        'industryManagerMiddleName',
        'industryManagerLastName',
        'industryManagerAddress',
        'fatherName',
        'grandFatherName',
        'permanentAddress',
        'temporaryAddress',
        'foodNameOne',
        'foodNameTwo',
        'foodNameThree',
        'packingSizeOne',
        'brandOne',
        'industryMachineOne',
        'industryManageOne',
        'labManage',
        'labWorksOne',
        'sanitation',
        'manufacture',
        'industryregistrationCertificate',
        'revenueReceipt',
        'letter',
        'drinkingWater',
        'industralistLetter',
        'passportSize',
        'packagedLogo',
        'roadMap',
        'citizenshipCopy',
        'industryCost',
        'industryCapacity',
        'userName',
        'userAddress',
        'createdOn',
        'createdBy',
        'alias',
        'status',
        'remarks',
        'created_at',
        'updated_at',
        'updatedBy',
        'newlicenseissue_status',
        'newlicenseissue_remarks',
        'approved_by',
        'approved_date',
        'date',
        'responsiblepersonName',
        'responsiblepersonAddress',
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

    public function consumer()
    {
        return $this->belongsTo(User::class, 'consumer_id', 'id');
    }
    public function newLicenseSubstance(){
        return $this->hasMany(NewlicenseSubstance::class,'newlicenseissue_id','newlicenseissue_id');
    }
}
