<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeController extends Controller
{
    //
    public static function layHeCuaTuongTiengViet($tenhetienganh) {
        $he = '[{"name":"Blademaster","name_vi":"Kiếm Khách","effect_vi":"Tướng Kiếm Khách có tỷ lệ ra thêm 2 đòn đánh nữa.Các đòn đánh cộng thêm này có sát thương như đòn đánh thường và đi kèm tất cả hiệu ứng từ trang bị của chủ sở hữu."},{"name":"Blaster","name_vi":"Pháo Thủ","effect_vi":"Tướng Pháo thủ sẽ bắn thêm vào kẻ địch ngẫu nhiên sau 4 đòn đánh thường,đòn đánh cộng thêm có sát thương như đòn đánh thường và đi kèm hiệu ứng từ trang bị của chủ sở hữu."},{"name":"Brawler","name_vi":"Đấu Sĩ","effect_vi":"Tướng Đấu Sĩ được tăng máu tối đa."},{"name":"Demolitionist","name_vi":"Bộc Phá"},{"name":"Infiltrator","name_vi":"Mật Thám","effect_vi":"Khi bắt đầu trận đấu Tướng Mật Thám  nhảy ra phía sau đội hình địch, nhận thêm tốc đánh trong 6 giây đầu trận"},{"name":"Mana-Reaver","name_vi":"Ma Tặc"},{"name":"Mercenary","name_vi":"Ngoại Binh"},{"name":"Mystic","name_vi":"Bí Ẩn","effect_vi":"Tất cả đồng minh được tăng kháng phép."},{"name":"Protector","name_vi":"Hộ Vệ","effect_vi":"Tướng Hộ Vệ nhận 1 lớp lá chắn tồn tại trong 4 giây sau khi sử dụng kĩ năng.Lớp giáp không cộng dồn."},{"name":"Sniper","name_vi":"Xạ Thủ"},{"name":"Sorcerer","name_vi":"Phù Thủy","effect_vi":"Tất cả đồng minh được tăng sát thương kỹ năng."},{"name":"Starship","name_vi":"Mẫu Hạm"},{"name":"Vanguard","name_vi":"Tiên Phong","effect_vi":"Tướng Tiên Phong được tăng giáp."}]';

        $dulieucuahe = json_decode($he);
        $item = '';
        foreach($dulieucuahe as $he) {
            if ($tenhetienganh == $he->name) {
                $item = $he;
                break;
            }
        }
        return $item;
    }
}
