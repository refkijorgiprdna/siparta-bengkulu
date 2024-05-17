<?php

namespace App\Models;

use App\Models\SubWisata;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GaleriSubWisata extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'subwisata_id', 'image'
    ];

    protected $hidden = [

    ];

    public function subwisata(){
        return $this->belongsTo(SubWisata::class, 'subwisata_id', 'id');
    }
}
