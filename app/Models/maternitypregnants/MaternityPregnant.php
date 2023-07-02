<?php

namespace App\Models\maternitypregnants;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\maternitypatients\MaternityPatient;
use App\Models\pregnantreports\PregnantReport;
use App\Models\maternityattendances\MaternityAttendance;

class MaternityPregnant extends Model
{
    use HasFactory;

    protected $table = 'maternity_pregnant';

    public function maternityPatient(){
        return $this->belongsTo(MaternityPatient::class);
    }

    public function getDueDateAttribute(){
        return Carbon::parse($this->attributes['due_date'])->toFormattedDateString();
    }

    public function pregnantReports(){
        return $this->hasMany(PregnantReport::class);
    }
    public function attendance(){
        return $this->hasMany(MaternityAttendance::class);
    }
}