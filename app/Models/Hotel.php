<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama', 'slug', 'coordinate', 'deskripsi', 'alamat', 
    ];

    protected $hidden = [

    ];

    public function galerihotel(){
        return $this->hasMany(GaleriHotel::class, 'hotel_id', 'id');
    }
}
