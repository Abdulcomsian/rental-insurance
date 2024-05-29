<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiclemake extends Model
{
    use HasFactory;

    public function models(){
        return $this->hasMany(vehiclemodel::class, 'make_id');
    }
}
