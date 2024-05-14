<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wisata extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama', 'slug', 'coordinate', 'deskripsi', 'alamat', 'link_video'
    ];

    protected $hidden = [

    ];

    public function galeriwisata(){
        return $this->hasMany(GaleriWisata::class, 'wisata_id', 'id');
    }
}
