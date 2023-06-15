<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('users')->insert([
            //'id' => 1,
            //'name' => 'admin',
            //'email' => 'admin@softui.com',
            //'password' => Hash::make('secret'),
            //'created_at' => now(),
//'updated_at' => now()
        //]);
        $admin = User::create([
            'id' => 2,
            'name' => 'Admin',
            'email' => 'admin@admin',
            'password' => bcrypt('admin123'),
            ]);
        $admin->assignRole('admin');
            $user = User::create([
            'name' => 'User',
            'email' => 'user@user',
            'password' => bcrypt('user123'),
            ]);
        $user->assignRole('user');
            
    }
}