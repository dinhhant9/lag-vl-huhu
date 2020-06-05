<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tuong extends Model
{
    //
    protected $table = 'tuong';

    protected $fillable = ['name', 'name_vi', 'set', 'tier','tier_up','tier_down','active','soon','new','updated','popular','buff','nerf','cost','health','armor','resistance','mana_start','mana_cost','attack','speed','dps','range','range_sm','skill'];



    public function He()
    {
        return $this->belongsToMany(He::class, 'tuong_he', 'tuong_id', 'he_id');
    }

    public function Toc()
    {
        return $this->belongsToMany(Toc::class, 'tuong_toc', 'tuong_id', 'toc_id');
    }

    public function Trangbi()
    {
        return $this->belongsToMany(TrangBi::class, 'tuong_trangbi', 'tuong_id', 'trangbi_id');
    }
}
