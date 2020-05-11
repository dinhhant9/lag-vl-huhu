<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoiHinhChuanController extends Controller
{
    //
    public function show()
    {
        $json1 = "[]";
        $json2 = json_decode('[{"foo":"bar"}, {"foo":"bar"}]', true);
        return view('pages.doihinhchuan', $json2);
    }
}
