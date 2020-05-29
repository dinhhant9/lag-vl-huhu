<?php

namespace App\Http\Controllers;

use App\Models\DoiHinhChuan;
use Illuminate\Http\Request;

class DoiHinhChuanController extends Controller
{
    //
    public function show()
    {
        $parse_json_hihi = DoiHinhChuan::orderBy('tier','ASC')->get()->toArray();

        $new_array = array_filter($parse_json_hihi, function($obj){
            if (json_decode($obj['set']) == [3]) {
                return true;
            }
            return false;
        });
        return view('pages.doihinhchuan')->with('doihinhchuan', $new_array);
    }
}
