<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceCompany extends Model
{
    use HasFactory;

    // public function subCompanies()
    // {
    //     return $this->hasMany(SubInsuranceCompany::class , 'main_company_id' , 'id');
    // }


}
