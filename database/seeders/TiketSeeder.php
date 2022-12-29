<?php

namespace Database\Seeders;

use App\Models\tiket;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Faker\Factory as Faker;

class TiketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            // insert data tiket
            DB::table('tiket')->insert([
                'nama_lengkap' => $faker->name,
                'tiket_id' => $faker->randomDigit,
                'tanggal' => $faker->date,
            ]);
        }
    }
}
