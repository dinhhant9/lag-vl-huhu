<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TuongController extends Controller
{
    //
    public static function someStaticFunction($var1) {
        // do something

        return $var1.'hihihihih';
    }

    public static function layGiaTienCuaTuong($tentuong) {
        $hi = '[{"name":"Ahri","cost":2},{"name":"Annie","cost":2},{"name":"Ashe","cost":3},{"name":"Aurelion Sol","cost":5},{"name":"Blitzcrank","cost":2},{"name":"Caitlyn","cost":1},{"name":"Chogath","cost":4},{"name":"Darius","cost":2},{"name":"Ekko","cost":5},{"name":"Ezreal","cost":3},{"name":"Fiora","cost":1},{"name":"Fizz","cost":4},{"name":"Gangplank","cost":5},{"name":"Graves","cost":1},{"name":"Irelia","cost":4},{"name":"Jarvan IV","cost":1},{"name":"Jayce","cost":3},{"name":"Jhin","cost":4},{"name":"Jinx","cost":4},{"name":"Kaisa","cost":2},{"name":"Karma","cost":3},{"name":"Kassadin","cost":3},{"name":"Kayle","cost":4},{"name":"Khazix","cost":1},{"name":"Leona","cost":1},{"name":"Lucian","cost":2},{"name":"Lulu","cost":5},{"name":"Lux","cost":3},{"name":"Malphite","cost":1},{"name":"Master Yi","cost":3},{"name":"Miss Fortune","cost":5},{"name":"Mordekaiser","cost":2},{"name":"Neeko","cost":3},{"name":"Poppy","cost":1},{"name":"Rakan","cost":2},{"name":"Rumble","cost":3},{"name":"Shaco","cost":3},{"name":"Shen","cost":2},{"name":"Sona","cost":2},{"name":"Soraka","cost":4},{"name":"Syndra","cost":3},{"name":"Thresh","cost":5},{"name":"Twisted Fate","cost":1},{"name":"Velkoz","cost":4},{"name":"Vi","cost":3},{"name":"Wukong","cost":4},{"name":"Xayah","cost":1},{"name":"Xin Zhao","cost":2},{"name":"Yasuo","cost":2},{"name":"Ziggs","cost":1},{"name":"Zoe","cost":1},{"name":"Xerath","cost":5}]';

        $dulieucuatuong = json_decode($hi);
        $item = 0;
        foreach($dulieucuatuong as $struct) {
            if ($tentuong == $struct->name) {
                $item = $struct->cost;
                break;
            }
        }
        return $item;
    }

    public function show()
    {
        $du_lieu_json = ''; //đang làm

        $parse_json_hihi = json_decode($du_lieu_json);
        $parse_json_hihi = collect($parse_json_hihi)->sortBy('tier')->toArray();
        return view('pages.cosodulieupage.danhsachtuong')->with('doihinhchuan', $parse_json_hihi);
    }
}
