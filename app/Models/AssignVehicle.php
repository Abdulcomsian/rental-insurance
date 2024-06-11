<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignVehicle extends Model
{
    use HasFactory;
    protected $table = 'assign_vehicle';

    public function rentalCompany(){
        return $this->belongsTo(Company::class, 'rental_company_id');
    }

    public function vehicle(){
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }

    public function insuranceCompany(){
        return $this->belongsTo(InsuranceCompany::class, 'insurance_company_id');
    }

    public function subInsuranceCompany(){
        return $this->belongsTo(SubInsuranceCompany::class, 'insurance_sub_company_id');
    }
}
