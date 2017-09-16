<?php

use Illuminate\Database\Seeder;
Use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = factory(User::class)->create([
             'username' => 'admin',
             'email' => 'admin@gmail.com',
             'password' => bcrypt('admin'),
             'last_name' => 'Mr',
             'first_name' => 'admin',
             'dob' => '2000-06-01'
         ]);
    }
}
