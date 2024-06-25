<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public function make(){
        return $this->belongsTo(vehiclemake::class, 'make_id');
    }

    public function model(){
        return $this->belongsTo(vehiclemodel::class, 'model_id');
    }
}
