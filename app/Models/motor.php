<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motor extends Model
{
    use HasFactory;
    public function motor()
    {
        return $this->belongsTo(jnsmotor::class, 'jnsid', 'id');
    }
    public function cartmotor()
    {
        return $this->hasMany(cart::class, 'mtrid', 'id');
    }

}
