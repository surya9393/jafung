<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Carbon\Carbon;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::insert([
            [
                'name'=>'Adminisrator',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('12345'),
                'created_at'=>Carbon::now('Asia/Jakarta')
            ]
            ]);
    }
}
