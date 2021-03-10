<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class HomeSeeder extends Seeder
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
                'title' => 'Alun - alun Kota Malang',
                'description' => 'Alun-Alun Kota Malang melengkapi keindahannya dan menghadirkan suasana yang selalu hangat dengan keramahan warga kota yang bersahabat kepada setiap orang yang datang.Salah satu dari alun-alun yang dimiliki oleh kota Malang dan sangat terkenal itu adalah Alun-Alun Kota Malang. '
            ]
            ];
        DB::table('homes')->insert($data);
    }
}