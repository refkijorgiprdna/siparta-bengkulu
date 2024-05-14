<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GaleriWisata extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'wisata_id', 'image'
    ];

    protected $hidden = [

    ];

    public function wisata(){
        return $this->belongsTo(Wisata::class, 'wisata_id', 'id');
    }
}
