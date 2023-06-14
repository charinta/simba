<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create('id');

        $statuses = ["Aktif", "Cuti", "DO Administrasi", "Tanpa Keterangan"];
        $agama = ["Islam", "Kristen", "Katholik", "Hindu", "Buddha", "Konghucu"];

        for ($i = 0; $i < 10; $i++) {
            Mahasiswa::insert([
            'nama' => $faker->name,
            'email' => $faker->email,
            'nim' => $faker->randomNumber(8),
            'status' => $statuses[array_rand($statuses)],
            'tanggal_lahir' => $faker->dateTimeBetween('2000-01-01', 'now')->format('Y-m-d'),
            'agama' => $agama[array_rand($agama)],

            // echo "Nama: $nama, Email: $email, NIM: $nim, Status: $status, Tanggal Lahir: $tanggal_lahir<br>";
            ]);
           
        }
}
}