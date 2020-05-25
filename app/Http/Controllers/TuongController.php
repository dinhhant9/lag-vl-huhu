<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TuongController extends Controller
{
    //
    public function show()
    {
        $du_lieu_json = ''; //đang làm

        $parse_json_hihi = json_decode($du_lieu_json);
        $parse_json_hihi = collect($parse_json_hihi)->sortBy('tier')->toArray();
        return view('pages.cosodulieupage.danhsachtuong')->with('doihinhchuan', $parse_json_hihi);
    }
}
