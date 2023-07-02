<?php

namespace App\Models\preganantreportreplies;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\pregnantreports\PregnantReport;
use App\Models\specializations\Specialist;

class PregnantReportReply extends Model
{
    use HasFactory;

    public function pregnantReport(){
        return $this->belongsTo(PregnantReport::class);
    }
    public function specialist(){
        return $this->belongsTo(Specialist::class,'specialist_id');
    }
}