<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoiHinhChuan extends Model
{
    //
    protected $table = 'doi_hinh_chuan';

    protected $fillable = ['name', 'name_ch', 'set', 'tier','tier_up','tier_down','traits','synergy','characters','components','mid','replacements'];
}
