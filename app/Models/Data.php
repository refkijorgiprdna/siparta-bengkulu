<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Data extends Model
{
    use SoftDeletes;

    protected $table = 'datas';

    protected $fillable = ['nama_bidang', 'data', 'link_video'];

    protected $hidden = [

    ];
}
