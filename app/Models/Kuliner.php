<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kuliner extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama', 'slug', 'coordinate', 'deskripsi', 'alamat'
    ];

    protected $hidden = [

    ];

    public function galerikuliner(){
        return $this->hasMany(GaleriKuliner::class, 'kuliner_id', 'id');
    }
}
