<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjadwalan extends Model
{
    protected $guarded = [];
 
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
    public function mobils()
    {
        return $this->belongsTo(Mobil::class);
    }

    public function surat()
    {
        return $this->belongsTo(Surat::class);
    }
}
