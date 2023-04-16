<?php

namespace App\Models\preganantreportreplies;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\pregnantreports\PregnantReport;

class PregnantReportReply extends Model
{
    use HasFactory;

    public function pregnantReport(){
        return $this->belongsTo(PregnantReport::class);
    }
}