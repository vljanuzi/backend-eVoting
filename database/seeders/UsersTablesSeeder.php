<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
'name' =>  'John Smith',
'email' => 'john_smith@gmail.com',
'password' =>  Hash :: make ('password'), //konverton passwordin ne vlere hash
'remember_token' => str_random(10),




        ])
    }
}
