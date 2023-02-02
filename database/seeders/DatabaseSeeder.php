<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('admins')->insert([
            [
                'admin_name' => 'phong',
                'password' => '06092kk1',
                'email' => 'phongnit69@gmail.com',
                'avatar' => 'phong.jpg',
                'phone' => '0362682422',
                'address' => 'Ngõ 1 Đông Quan, Quan Hoa, Cầu Giấy, Hà Nội',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'admin_name' => 'bao',
                'password' => bcrypt('123456'),
                'email' => 'bao123@gmail.com',
                'avatar' => 'bao.jpg',
                'phone' => '0123456789',
                'address' => '1 Lạc Long Quân, Cầu Giấy, Hà Nội',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
        DB::table('users')->insert([
            [
                'user_name' => 'Khach01',
                'password' => bcrypt('khach01'),
                'gender' => 1,
                'email' => 'khach01@gmail.com',
                'birthday' => '2001/10/13',
                'avatar' => 'khach01.jpg',
                'phone' => '0234567891',
                'address' => 'Ngõ 1 Đông Quan, Quan Hoa, Cầu Giấy, Hà Nội',
                'status' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_name' => 'Khach02',
                'password' => bcrypt('khach02'),
                'gender' => 0,
                'email' => 'khach02@gmail.com',
                'birthday' => '2001/10/13',
                'avatar' => 'khach02.jpg',
                'phone' => '0234567891',
                'address' => 'Ngõ 1 Đông Quan, Quan Hoa, Cầu Giấy, Hà Nội',
                'status' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_name' => 'Khach03',
                'password' => bcrypt('khach03'),
                'gender' => 0,
                'email' => 'khach03@gmail.com',
                'birthday' => '2001/10/13',
                'avatar' => 'khach03.jpg',
                'phone' => '0234567891',
                'address' => 'Ngõ 1 Đông Quan, Quan Hoa, Cầu Giấy, Hà Nội',
                'status' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
