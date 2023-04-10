<?php

namespace App\Models\maternitypregnants;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\maternitypatients\MaternityPatient;

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
}
