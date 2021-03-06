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
        $tien = '[{"name":"Ahri","cost":2},{"name":"Annie","cost":2},{"name":"Ashe","cost":3},{"name":"Aurelion Sol","cost":5},{"name":"Blitzcrank","cost":2},{"name":"Caitlyn","cost":1},{"name":"Chogath","cost":4},{"name":"Darius","cost":2},{"name":"Ekko","cost":5},{"name":"Ezreal","cost":3},{"name":"Fiora","cost":1},{"name":"Fizz","cost":4},{"name":"Gangplank","cost":5},{"name":"Graves","cost":1},{"name":"Irelia","cost":4},{"name":"Jarvan IV","cost":1},{"name":"Jayce","cost":3},{"name":"Jhin","cost":4},{"name":"Jinx","cost":4},{"name":"Kaisa","cost":2},{"name":"Karma","cost":3},{"name":"Kassadin","cost":3},{"name":"Kayle","cost":4},{"name":"Khazix","cost":1},{"name":"Leona","cost":1},{"name":"Lucian","cost":2},{"name":"Lulu","cost":5},{"name":"Lux","cost":3},{"name":"Malphite","cost":1},{"name":"Master Yi","cost":3},{"name":"Miss Fortune","cost":5},{"name":"Mordekaiser","cost":2},{"name":"Neeko","cost":3},{"name":"Poppy","cost":1},{"name":"Rakan","cost":2},{"name":"Rumble","cost":3},{"name":"Shaco","cost":3},{"name":"Shen","cost":2},{"name":"Sona","cost":2},{"name":"Soraka","cost":4},{"name":"Syndra","cost":3},{"name":"Thresh","cost":5},{"name":"Twisted Fate","cost":1},{"name":"Velkoz","cost":4},{"name":"Vi","cost":3},{"name":"Wukong","cost":4},{"name":"Xayah","cost":1},{"name":"Xin Zhao","cost":2},{"name":"Yasuo","cost":2},{"name":"Ziggs","cost":1},{"name":"Zoe","cost":1},{"name":"Xerath","cost":5}]';

        $dulieucuatuong = json_decode($tien);
        $item = 0;
        foreach($dulieucuatuong as $tuong) {
            if ($tentuong == $tuong->name) {
                $item = $tuong->cost;
                break;
            }
        }
        return $item;
    }

    public static function layTocCuaTuongTiengAnh($tentuong) {
        $toc = '[{"name":"Ahri","origin":["Star Guardian"],"origin_vi":["Vệ Binh Tinh Tú"]},{"name":"Annie","origin":["Mech Pilot"],"origin_vi":["Phi Công"]},{"name":"Ashe","origin":["Celestial"],"origin_vi":["Vũ Trụ"]},{"name":"Aurelion Sol","origin":["Rebel"],"origin_vi":["Nổi Loạn"]},{"name":"Blitzcrank","origin":["Chrono"],"origin_vi":["Thời Không"]},{"name":"Caitlyn","origin":["Chrono"],"origin_vi":["Thời Không"]},{"name":"Chogath","origin":["Void"],"origin_vi":["Hư Không"]},{"name":"Darius","origin":["Space Pirate"],"origin_vi":["Không Tặc"]},{"name":"Ekko","origin":["Cybernetic"],"origin_vi":["Siêu Công Nghệ"]},{"name":"Ezreal","origin":["Chrono"],"origin_vi":["Thời Không"]},{"name":"Fiora","origin":["Cybernetic"],"origin_vi":["Siêu Công Nghệ"]},{"name":"Fizz","origin":["Mech Pilot"],"origin_vi":["Phi Công"]},{"name":"Gangplank","origin":["Space Pirate"],"origin_vi":["Không Tặc"]},{"name":"Graves","origin":["Space Pirate"],"origin_vi":["Không Tặc"]},{"name":"Irelia","origin":["Cybernetic"],"origin_vi":["Siêu Công Nghệ"]},{"name":"Jarvan IV","origin":["Dark Star"],"origin_vi":["Hắc Tinh"]},{"name":"Jayce","origin":["Space Pirate"],"origin_vi":["Không Tặc"]},{"name":"Jhin","origin":["Dark Star"],"origin_vi":["Hắc Tinh"]},{"name":"Jinx","origin":["Rebel"],"origin_vi":["Nổi Loạn"]},{"name":"Kaisa","origin":["Valkyrie"],"origin_vi":["Thánh Nữ"]},{"name":"Karma","origin":["Dark Star"],"origin_vi":["Hắc Tinh"]},{"name":"Kassadin","origin":["Celestial"],"origin_vi":["Vũ Trụ"]},{"name":"Kayle","origin":["Valkyrie"],"origin_vi":["Thánh Nữ"]},{"name":"Khazix","origin":["Void"],"origin_vi":["Hư Không"]},{"name":"Leona","origin":["Cybernetic"],"origin_vi":["Siêu Công Nghệ"]},{"name":"Lucian","origin":["Cybernetic"],"origin_vi":["Siêu Công Nghệ"]},{"name":"Lulu","origin":["Celestial"],"origin_vi":["Vũ Trụ"]},{"name":"Lux","origin":["Dark Star"],"origin_vi":["Hắc Tinh"]},{"name":"Malphite","origin":["Rebel"],"origin_vi":["Nổi Loạn"]},{"name":"Master Yi","origin":["Rebel"],"origin_vi":["Nổi Loạn"]},{"name":"Miss Fortune","origin":["Valkyrie"],"origin_vi":["Thánh Nữ"]},{"name":"Mordekaiser","origin":["Dark Star"],"origin_vi":["Hắc Tinh"]},{"name":"Neeko","origin":["Star Guardian"],"origin_vi":["Vệ Binh Tinh Tú"]},{"name":"Poppy","origin":["Star Guardian"],"origin_vi":["Vệ Binh Tinh Tú"]},{"name":"Rakan","origin":["Celestial"],"origin_vi":["Vũ Trụ"]},{"name":"Rumble","origin":["Mech Pilot"],"origin_vi":["Phi Công"]},{"name":"Shaco","origin":["Dark Star"],"origin_vi":["Hắc Tinh"]},{"name":"Shen","origin":["Chrono"],"origin_vi":["Thời Không"]},{"name":"Sona","origin":["Rebel"],"origin_vi":["Nổi Loạn"]},{"name":"Soraka","origin":["Star Guardian"],"origin_vi":["Vệ Binh Tinh Tú"]},{"name":"Syndra","origin":["Star Guardian"],"origin_vi":["Vệ Binh Tinh Tú"]},{"name":"Thresh","origin":["Chrono"],"origin_vi":["Thời Không"]},{"name":"Twisted Fate","origin":["Chrono"],"origin_vi":["Thời Không"]},{"name":"Velkoz","origin":["Void"],"origin_vi":["Hư Không"]},{"name":"Vi","origin":["Cybernetic"],"origin_vi":["Siêu Công Nghệ"]},{"name":"Wukong","origin":["Chrono"],"origin_vi":["Thời Không"]},{"name":"Xayah","origin":["Celestial"],"origin_vi":["Vũ Trụ"]},{"name":"Xin Zhao","origin":["Celestial"],"origin_vi":["Vũ Trụ"]},{"name":"Yasuo","origin":["Rebel"],"origin_vi":["Nổi Loạn"]},{"name":"Ziggs","origin":["Rebel"],"origin_vi":["Nổi Loạn"]},{"name":"Zoe","origin":["Star Guardian"],"origin_vi":["Vệ Binh Tinh Tú"]},{"name":"Xerath","origin":["Dark Star"],"origin_vi":["Hắc Tinh"]}]';

        $dulieucuatuong = json_decode($toc);
        $item = '';
        foreach($dulieucuatuong as $tuong) {
            if ($tentuong == $tuong->name) {
                $item = $tuong->origin;
                break;
            }
        }
        return $item;
    }

    public static function layHeCuaTuongTiengAnh($tentuong) {
        $he = '[{"name":"Ahri","type":["Sorcerer"],"type_vi":["Phù Thủy"]},{"name":"Annie","type":["Sorcerer"],"type_vi":["Phù Thủy"]},{"name":"Ashe","type":["Sniper"],"type_vi":["Xạ Thủ"]},{"name":"Aurelion Sol","type":["Starship"],"type_vi":["Mẫu Hạm"]},{"name":"Blitzcrank","type":["Brawler"],"type_vi":["Đấu Sĩ"]},{"name":"Caitlyn","type":["Sniper"],"type_vi":["Xạ Thủ"]},{"name":"Chogath","type":["Brawler"],"type_vi":["Đấu Sĩ"]},{"name":"Darius","type":["Mana-Reaver"],"type_vi":["Ma Tặc"]},{"name":"Ekko","type":["Infiltrator"],"type_vi":["Mật Thám"]},{"name":"Ezreal","type":["Blaster"],"type_vi":["Pháo Thủ"]},{"name":"Fiora","type":["Blademaster"],"type_vi":["Kiếm Khách"]},{"name":"Fizz","type":["Infiltrator"],"type_vi":["Mật Thám"]},{"name":"Gangplank","type":["Mercenary","Demolitionist"],"type_vi":["Ngoại Binh","Bộc Phá"]},{"name":"Graves","type":["Blaster"],"type_vi":["Pháo Thủ"]},{"name":"Irelia","type":["Mana-Reaver","Blademaster"],"type_vi":["Ma Tặc","Kiếm Khách"]},{"name":"Jarvan IV","type":["Protector"],"type_vi":["Hộ Vệ"]},{"name":"Jayce","type":["Vanguard"],"type_vi":["Tiên Phong"]},{"name":"Jhin","type":["Sniper"],"type_vi":["Xạ Thủ"]},{"name":"Jinx","type":["Blaster"],"type_vi":["Pháo Thủ"]},{"name":"Kaisa","type":["Infiltrator"],"type_vi":["Mật Thám"]},{"name":"Karma","type":["Mystic"],"type_vi":["Bí Ẩn"]},{"name":"Kassadin","type":["Mana-Reaver"],"type_vi":["Ma Tặc"]},{"name":"Kayle","type":["Blademaster"],"type_vi":["Kiếm Khách"]},{"name":"Khazix","type":["Infiltrator"],"type_vi":["Mật Thám"]},{"name":"Leona","type":["Vanguard"],"type_vi":["Tiên Phong"]},{"name":"Lucian","type":["Blaster"],"type_vi":["Pháo Thủ"]},{"name":"Lulu","type":["Mystic"],"type_vi":["Bí Ẩn"]},{"name":"Lux","type":["Sorcerer"],"type_vi":["Phù Thủy"]},{"name":"Malphite","type":["Brawler"],"type_vi":["Đấu Sĩ"]},{"name":"Master Yi","type":["Blademaster"],"type_vi":["Kiếm Khách"]},{"name":"Miss Fortune","type":["Mercenary","Blaster"],"type_vi":["Ngoại Binh","Pháo Thủ"]},{"name":"Mordekaiser","type":["Vanguard"],"type_vi":["Tiên Phong"]},{"name":"Neeko","type":["Protector"],"type_vi":["Hộ Vệ"]},{"name":"Poppy","type":["Vanguard"],"type_vi":["Tiên Phong"]},{"name":"Rakan","type":["Protector"],"type_vi":["Hộ Vệ"]},{"name":"Rumble","type":["Demolitionist"],"type_vi":["Bộc Phá"]},{"name":"Shaco","type":["Infiltrator"],"type_vi":["Mật Thám"]},{"name":"Shen","type":["Blademaster"],"type_vi":["Kiếm Khách"]},{"name":"Sona","type":["Mystic"],"type_vi":["Bí Ẩn"]},{"name":"Soraka","type":["Mystic"],"type_vi":["Bí Ẩn"]},{"name":"Syndra","type":["Sorcerer"],"type_vi":["Phù Thủy"]},{"name":"Thresh","type":["Mana-Reaver"],"type_vi":["Ma Tặc"]},{"name":"Twisted Fate","type":["Sorcerer"],"type_vi":["Phù Thủy"]},{"name":"Velkoz","type":["Sorcerer"],"type_vi":["Phù Thủy"]},{"name":"Vi","type":["Brawler"],"type_vi":["Đấu Sĩ"]},{"name":"Wukong","type":["Vanguard"],"type_vi":["Tiên Phong"]},{"name":"Xayah","type":["Blademaster"],"type_vi":["Kiếm Khách"]},{"name":"Xin Zhao","type":["Protector"],"type_vi":["Hộ Vệ"]},{"name":"Yasuo","type":["Blademaster"],"type_vi":["Kiếm Khách"]},{"name":"Ziggs","type":["Demolitionist"],"type_vi":["Bộc Phá"]},{"name":"Zoe","type":["Sorcerer"],"type_vi":["Phù Thủy"]},{"name":"Xerath","type":["Sorcerer"],"type_vi":["Phù Thủy"]}]';

        $dulieucuatuong = json_decode($he);
        $item = '';
        foreach($dulieucuatuong as $tuong) {
            if ($tentuong == $tuong->name) {
                $item = $tuong->type;
                break;
            }
        }
        return $item;
    }

    public static function layTrangBiCuaTuong($tentuong) {
        $he = '[{"name":"Ahri","items":["Chalice of Favor","Jeweled Gauntlet","Morellonomicon"]},{"name":"Annie","items":["Bramble Vest","Quicksilver","Titan\'s Resolve"]},{"name":"Ashe","items":["Guinsoo\'s Rageblade","Spear of Shojin","Spear of Shojin"]},{"name":"Aurelion Sol","items":["Morellonomicon","Rabadon\'s Deathcap","Seraph\'s Embrace"]},{"name":"Blitzcrank","items":["Chalice of Favor","Ionic Spark","Warmog\'s Armor"]},{"name":"Caitlyn","items":["Guinsoo\'s Rageblade","Runaan\'s Hurricane","Trap Claw"]},{"name":"Chogath","items":["Guardian Angel","Ionic Spark","Morellonomicon"]},{"name":"Darius","items":["Guardian Angel","Jeweled Gauntlet","Rabadon\'s Deathcap"]},{"name":"Ekko","items":["Ionic Spark","Morellonomicon","Rabadon\'s Deathcap"]},{"name":"Ezreal","items":["Giant Slayer","Red Buff","Spear of Shojin"]},{"name":"Fiora","items":["Guardian Angel","Hand of Justice","Ionic Spark"]},{"name":"Fizz","items":["Bramble Vest","Quicksilver","Titan\'s Resolve"]},{"name":"Gangplank","items":["Guardian Angel","Ionic Spark","Rabadon\'s Deathcap"]},{"name":"Graves","items":["Giant Slayer","Rapid Firecannon","Red Buff"]},{"name":"Irelia","items":["Guardian Angel","Infinity Edge","Last Whisper"]},{"name":"Jarvan IV","items":["Bramble Vest","Locket of the Iron Solari","Zz\'Rot Portal"]},{"name":"Jayce","items":["Guardian Angel","Hextech Gunblade","Ionic Spark"]},{"name":"Jhin","items":["Guardian Angel","Infinity Edge","Runaan\'s Hurricane"]},{"name":"Jinx","items":["Giant Slayer","Guardian Angel","Red Buff"]},{"name":"Kaisa","items":["Morellonomicon","Seraph\'s Embrace","Seraph\'s Embrace"]},{"name":"Karma","items":["Guardian Angel","Rabadon\'s Deathcap","Seraph\'s Embrace"]},{"name":"Kassadin","items":["Guardian Angel","Ionic Spark","Morellonomicon"]},{"name":"Kayle","items":["Guardian Angel","Guinsoo\'s Rageblade","Rapid Firecannon"]},{"name":"Khazix","items":["Bloodthirster","Guardian Angel","Infinity Edge"]},{"name":"Leona","items":["Bramble Vest","Redemption","Zz\'Rot Portal"]},{"name":"Lucian","items":["Giant Slayer","Giant Slayer","Red Buff"]},{"name":"Lulu","items":["Spear of Shojin","Spear of Shojin","Spear of Shojin"]},{"name":"Lux","items":["Morellonomicon","Rabadon\'s Deathcap","Seraph\'s Embrace"]},{"name":"Malphite","items":["Bramble Vest","Dragon\'s Claw","Zz\'Rot Portal"]},{"name":"Master Yi","items":["Bramble Vest","Guinsoo\'s Rageblade","Quicksilver"]},{"name":"Miss Fortune","items":["Quicksilver","Rabadon\'s Deathcap","Seraph\'s Embrace"]},{"name":"Mordekaiser","items":["Bramble Vest","Morellonomicon","Zz\'Rot Portal"]},{"name":"Neeko","items":["Bramble Vest","Guardian Angel","Ionic Spark"]},{"name":"Poppy","items":["Bramble Vest","Guardian Angel","Ionic Spark"]},{"name":"Rakan","items":["Ionic Spark","Morellonomicon","Spear of Shojin"]},{"name":"Rumble","items":["Bramble Vest","Quicksilver","Titan\'s Resolve"]},{"name":"Shaco","items":["Bloodthirster","Guardian Angel","Infinity Edge"]},{"name":"Shen","items":["Bramble Vest","Redemption","Zz\'Rot Portal"]},{"name":"Sona","items":["Chalice of Favor","Chalice of Favor","Seraph\'s Embrace"]},{"name":"Soraka","items":["Guardian Angel","Rapid Firecannon","Spear of Shojin"]},{"name":"Syndra","items":["Guardian Angel","Rabadon\'s Deathcap","Seraph\'s Embrace"]},{"name":"Thresh","items":["Seraph\'s Embrace","Spear of Shojin","Zephyr"]},{"name":"Twisted Fate","items":["Morellonomicon","Spear of Shojin","Spear of Shojin"]},{"name":"Velkoz","items":["Morellonomicon","Quicksilver","Seraph\'s Embrace"]},{"name":"Vi","items":["Frozen Heart","Guardian Angel","Ionic Spark"]},{"name":"Wukong","items":["Frozen Heart","Ionic Spark","Morellonomicon"]},{"name":"Xayah","items":["Giant Slayer","Guinsoo\'s Rageblade","Statikk Shiv"]},{"name":"Xin Zhao","items":["Bramble Vest","Dragon\'s Claw","Titan\'s Resolve"]},{"name":"Yasuo","items":["Guardian Angel","Hand of Justice","Infinity Edge"]},{"name":"Ziggs","items":["Rabadon\'s Deathcap","Seraph\'s Embrace","Seraph\'s Embrace"]},{"name":"Zoe","items":["Chalice of Favor","Rabadon\'s Deathcap","Spear of Shojin"]},{"name":"Xerath","items":["Guinsoo\'s Rageblade","Quicksilver","Rabadon\'s Deathcap"]}]';

        $dulieucuatuong = json_decode($he);
        $item = null;
        foreach($dulieucuatuong as $tuong) {
            if ($tentuong == $tuong->name) {
                $item = $tuong->items;
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
