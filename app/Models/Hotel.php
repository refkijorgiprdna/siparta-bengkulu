<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama', 'slug', 'coordinate', 'bintang', 'deskripsi', 'alamat', 'link_reservasi', 'link_video'
    ];

    protected $hidden = [

    ];

    public function galerihotel(){
        return $this->hasMany(GaleriHotel::class, 'wisata_id', 'id');
    }
}
