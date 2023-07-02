<?php

namespace App\Models\maternitypatients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\maternitypregnants\MaternityPregnant;

class MaternityPatient extends Model
{
    use HasFactory;

    public function maternityPregnant(){
        return $this->hasMany(MaternityPregnant::class);
    }

    public function getFullnameAttribute(){
        return $this->attributes['first_name'].' '.$this->attributes['middle_name'].' '.$this->attributes['last_name'];
    }

    public function getAgeAttribute(){
    $dob = $this->attributes['dob'];
    $today = date('Y-m-d');
    $diff = date_diff(date_create($dob), date_create($today));
    return $diff->y;
}

}