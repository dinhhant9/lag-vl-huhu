<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrangBi extends Model
{
    //
    protected $table = 'trangbi';

    protected $fillable = ['name', 'name_vi', 'set', 'tier','tier_up','tier_down','bonus_vi','into','bonus','stats'];

    public function Tuong(){
        return $this->belongsToMany(Tuong::class,'tuong_trangbi', 'trangbi_id', 'tuong_id');
    }
}
