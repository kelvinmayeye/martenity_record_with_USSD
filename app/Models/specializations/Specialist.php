<?php

namespace App\Models\specializations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\specializations\Specialization;
use App\Models\preganantreportreplies\PregnantReportReply;

class Specialist extends Model{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function specialization(){
        return $this->belongsTo(Specialization::class);
    }

    public function reportReplies(){
        return $this->hasMany(PregnantReportReply::class,'specialist_id');
    }
}