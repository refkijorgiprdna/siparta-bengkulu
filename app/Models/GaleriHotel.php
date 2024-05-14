<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GaleriHotel extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'hotel_id', 'image'
    ];

    protected $hidden = [

    ];

    public function hotel(){
        return $this->belongsTo(Hotel::class, 'hotel_id', 'id');
    }
}
