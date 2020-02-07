<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Alejandro González Reyes',
            'email' => 'alexglzrys@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
