<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin102',
            'type' => 'admin',
            'email'=> 'nuwavqaq@admin.com' ,
            'password' => Hash::make('123!@#QWEqwe')
        ]);
    }
}
