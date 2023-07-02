<?php

namespace App\Models\maternityattendances;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\maternitypregnants\MaternityPregnant;

class MaternityAttendance extends Model
{
    use HasFactory;

    protected $table = 'maternity_attendance';

    public function maternityPregnant(){
        return $this->belongsTo(MaternityPregnant::class);
    }
    
}