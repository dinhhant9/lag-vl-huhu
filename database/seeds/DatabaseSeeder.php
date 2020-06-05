<?php

use App\Models\DoiHinhChuan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Toc;
use App\Models\He;
use App\Models\TrangBi;
use App\Models\Tuong;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);
//         DB::table('doi_hinh_chuan')->insert([
//
//         ]);
        $json = File::get("database/seeds/doi-hinh-chuan.json");
        $jsonHe = File::get("database/seeds/he.json");
        $jsonToc = File::get("database/seeds/toc.json");
        $jsonTB = File::get("database/seeds/trang-bi.json");
        $jsonTuong = File::get("database/seeds/tuong.json");
        $data = json_decode($json);
        $dataHe = json_decode($jsonHe);
        $dataToc = json_decode($jsonToc);
        $dataTB = json_decode($jsonTB);
        $dataTuong  = json_decode($jsonTuong);


        foreach ($data as $obj) {
            DoiHinhChuan::create(array(
                'name' => $obj->name,
                'name_ch' => $obj->name_ch,
                'set' => json_encode($obj->set),
                'tier' => $obj->tier,
                'tier_up' => $obj->tier_up,
                'tier_down'=> $obj->tier_down,
                'traits'=> json_encode($obj->traits),
                'synergy'=> json_encode($obj->synergy),
                'characters'=> json_encode($obj->characters),
                'components'=> json_encode($obj->components),
                'mid'=> json_encode($obj->mid),
                'replacements'=> json_encode($obj->replacements),
            ));
        }

        foreach ($dataHe as $obj) {
            He::create(array(
                'name' => $obj->name ?? false,
                'name_vi' => $obj->name_vi ?? false,
                'set' => json_encode($obj->set) ?? false,
                'tier' => $obj->tier ?? false,
                'tier_up' => $obj->tier_up ?? false,
                'tier_down'=> $obj->tier_down ?? false,
                'effect'=> $obj->effect ?? false,
                'effect_vi'=> $obj->effect_vi ?? false,
                'bonus'=> json_encode($obj->bonus) ?? false,
            ));
        }

        foreach ($dataToc as $obj) {
            Toc::create(array(
                'name' => $obj->name ?? false,
                'name_vi' => $obj->name_vi ?? false,
                'set' => json_encode($obj->set) ?? false,
                'tier' => $obj->tier ?? false,
                'tier_up' => $obj->tier_up ?? false,
                'tier_down'=> $obj->tier_down ?? false,
                'effect'=> $obj->effect ?? false,
                'effect_vi'=> $obj->effect_vi ?? false,
                'bonus'=> json_encode($obj->bonus) ?? false,
            ));
        }


        foreach ($dataTB as $obj) {
            TrangBi::create(array(
                'name' => $obj->name ?? false,
                'name_vi' => $obj->name_vi ?? false,
                'set' => json_encode($obj->set) ?? false,
                'tier' => $obj->tier ?? false,
                'tier_up' => $obj->tier_up ?? false,
                'tier_down'=> $obj->tier_down ?? false,
                'bonus'=> json_encode($obj->bonus) ?? false,
                'bonus_vi'=> json_encode($obj->bonus_vi) ?? false,
                'into'=> isset($obj->into) ? json_encode($obj->into) : "",
                'stats'=> isset($obj->stats) ? json_encode($obj->stats) : "",
            ));
        }

        foreach ($dataTuong as $obj) {
            $item = [
                'name' => $obj->name,
                'name_vi' => $obj->name_vi,
                'set' => json_encode($obj->set),
                'tier' => $obj->tier ?? false,
                'tier_up' => $obj->tier_up ?? false,
                'tier_down' => $obj->tier_down ?? false,
                'active' => $obj->active ?? false,
                'soon' => $obj->soon ?? false,
                'new' => $obj->new ?? false,
                'updated' => $obj->updated ?? false,
                'popular' => $obj->popular ?? false,
                'buff' => $obj->buff ?? false,
                'nerf' => $obj->nerf ?? false,
                'cost' => $obj->cost ?? false,
                'health' => json_encode($obj->health),
                'armor' => json_encode($obj->armor),
                'resistance' => json_encode($obj->resistance),
                'mana_start' => $obj->mana_start ?? false,
                'mana_cost' => $obj->mana_cost ?? false,
                'attack' => json_encode($obj->attack) ?? false,
                'speed' => $obj->speed ?? false,
                'dps' => json_encode($obj->dps) ?? false,
                'range' => $obj->range ?? false,
                'range_sm' => $obj->range_sm ?? false,
                'skill' => json_encode($obj->skill),
            ];
            $tuong = Tuong::create($item);
            $he = He::whereIn('name',$obj->type)->get();
            $toc = Toc::whereIn('name',$obj->origin)->get();
            $trangbi = TrangBi::whereIn('name',$obj->items)->get();

            $tuong->He()->attach($he);
            $tuong->Toc()->attach($toc);
            $tuong->Trangbi()->attach($trangbi);

        }
    }
}
