<?php

namespace App\Models\specializations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\specializations\Specialist;

class Specialization extends Model
{
    use HasFactory;

    public function specialists()
    {
        return $this->hasMany(Specialist::class);
    }
    
}