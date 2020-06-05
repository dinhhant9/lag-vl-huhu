<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Toc extends Model
{
    //
    protected $table = 'toc';

    protected $fillable = ['name', 'name_vi', 'set', 'tier','tier_up','tier_down','effect','effect_vi','bonus'];

    public function Tuong(){
        return $this->belongsToMany(Tuong::class,'tuong_toc', 'he_id', 'toc_id');
    }
}
