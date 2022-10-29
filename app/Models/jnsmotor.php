<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jnsmotor extends Model
{
    use HasFactory;
    public function jnsmotor()
    {
        return $this->hasMany(motor::class, 'jnsid', 'id');
    }
}
