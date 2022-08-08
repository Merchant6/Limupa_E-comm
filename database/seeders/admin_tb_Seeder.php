<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class admin_tb_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_tb')->insert([
            'email' => 'admin@example.com',
            'password' => bcrypt('1qw23er45t'),
            
            ]);
    }
}
