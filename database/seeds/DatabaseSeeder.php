<?php

use App\Models\DoiHinhChuan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        $data = json_decode($json);
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
    }
}
