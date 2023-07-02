<?php

namespace App\Models\complications;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\complications\SubComplication;

class Complication extends Model
{
    use HasFactory;

    public function subComplications(){
        return $this->hasMany(SubComplication::class);
    }
}