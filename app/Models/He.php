<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class He extends Model
{
    //
    protected $table = 'he';

    protected $fillable = ['name', 'name_vi', 'set', 'tier','tier_up','tier_down','effect','effect_vi','bonus'];

    public function Tuong(){
        return $this->belongsToMany(Tuong::class,'tuong_he', 'he_id', 'tuong_id');
    }
}
