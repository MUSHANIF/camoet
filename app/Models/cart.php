<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'userid', 'id');
    }
    public function mtr()
    {
        return $this->belongsTo(motor::class, 'mtrid', 'id');
    }
    public function orang()
    {
        return $this->belongsTo(validation::class, 'userid', 'userid');
    }
    public function trans()
    {
        return $this->hasMany(transaksi::class, 'userid', 'userid');
    }
}
