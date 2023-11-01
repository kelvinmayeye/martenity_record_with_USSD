<?php

namespace App\Models\complications;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\complications\Complication;

class SubComplication extends Model
{
    use HasFactory;

    protected $table = 'sub_complication';


    public function complication(){
        return $this->belongsTo(Complication::class);
    }
}