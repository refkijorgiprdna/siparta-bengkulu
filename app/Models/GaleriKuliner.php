<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GaleriKuliner extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'kuliner_id', 'image'
    ];

    protected $hidden = [

    ];

    public function kuliner(){
        return $this->belongsTo(Kuliner::class, 'kuliner_id', 'id');
    }
}
