<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'image' => 'img/malang.jpg',
                'title' => 'Alun-Alun Kota Malang',
                'description' => 'Alun-alun Kota Malang ini selain berfungsi sebagai taman kota juga banyak di kunjungi wisatawan untuk berekreasi. Hal ini karena fasilitas dan wahana yang ada di taman cukup lengkap. Mulai dari wahana permainan sampai wisata kuliner bisa dilakukan di sini.',

            ]
            ];
        DB::table('pictures')->insert($data);
    }
}