<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class validation extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->hasMany(cart::class, 'userid', 'userid');
    }
    public function validationuser()
    {
        return $this->belongsTo(User::class, 'userid', 'id');
    }
}
