<?php

namespace App\Models\pregnantreports;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\maternitypregnants\MaternityPregnant;
use App\Models\preganantreportreplies\PregnantReportReply;

class PregnantReport extends Model
{
    use HasFactory;

    public function maternityPregnant(){
        return $this->belongsTo(MaternityPregnant::class);
    }

    public function pregnantReportReplies(){
        return $this->hasMany(PregnantReportReply::class);
    }
}