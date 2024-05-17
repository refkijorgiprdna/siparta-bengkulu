<?php

namespace App\Models;

use App\Models\GaleriSubWisata;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubWisata extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'wisata_id', 'nama', 'slug', 'coordinate', 'deskripsi', 'alamat', 'link_video'
    ];

    protected $hidden = [

    ];

    public function wisata(){
        return $this->belongsTo(Wisata::class, 'wisata_id', 'id');
    }

    public function galerisubwisata(){
        return $this->hasMany(GaleriSubWisata::class, 'subwisata_id', 'id');
    }
}
