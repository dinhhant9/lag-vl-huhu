<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TocController extends Controller
{
    //
    public static function layTocCuaTuongTiengViet($tentoctienganh) {
        $toc = '[{"name":"Celestial","name_vi":"Vũ Trụ","effect_vi":"Tất cả đồng minh được hồi máu dựa trên % sát thương họ gây ra tính cả kỹ năng và đòn đánh thường."},{"name":"Chrono","name_vi":"Thời Không","effect_vi":"Tất cả đồng minh tăng 15% tốc độ đánh."},{"name":"Cybernetic","name_vi":"Siêu Công Nghệ","effect_vi":"Tướng Siêu Công Nghệ khi mang tối thiểu 1 trang bị sẽ được tăng máu và sát thương."},{"name":"Dark Star","name_vi":"Hắc Tinh","effect_vi":"When a Dark Star Champion dies, all other allied Dark Star Champions gain increased damage."},{"name":"Mech Pilot","name_vi":"Phi Công"},{"name":"Rebel","name_vi":"Nổi Loạn","effect_vi":"Khi bắt đầu trận đấu,Tướng Nổi Loạn nhận được 1 lớp lá chắn và sát thương cộng thêm với mỗi Tướng Nổi Loạn trên sân,lá chắn tồn tại trong 8 giây."},{"name":"Space Pirate","name_vi":"Không Tặc","effect_vi":"Có 50% tỷ lệ ra 1 vàng ( 2 tướng ) và 10% tỷ lệ ra mảnh đồ (4 tướng ) với mỗi mạng Tướng Không Tặc hạ gục."},{"name":"Star Guardian","name_vi":"Vệ Binh Tinh Tú","effect_vi":"Khi tướng Vệ Binh Tinh Tú dùng kỹ năng,các tướng Vệ Binh Tinh Tú khác sẽ nhận thêm năng lượng."},{"name":"Valkyrie","name_vi":"Thánh Nữ"},{"name":"Void","name_vi":"Hư Không"}]';

        $dulieucuatoc = json_decode($toc);
        $item = '';
        foreach($dulieucuatoc as $toc) {
            if ($tentoctienganh == $toc->name) {
                $item = $toc;
                break;
            }
        }
        return $item;
    }
}
