<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();

        DB::table('users')->insert([

            'name' => 'Jhon Arcila Castaño',
            'email' => 'jhondeiber3030@gmail.com',
            'password' => Hash::make('admin2020'),
            'created_at' =>  $date
        ]);

        DB::table('users')->insert([

            'name' => 'Carlos castañeda',
            'email' => 'carlos.castaneda@ucaldas.edu.co',
            'password' => Hash::make('admin2020'),
            'created_at' =>  $date
        ]);

    }
}
