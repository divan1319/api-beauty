<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocupation extends Model
{
    use HasFactory;

    public function profile(){
        return $this->hasMany(Profile::class);
    }
}
