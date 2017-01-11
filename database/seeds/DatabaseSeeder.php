<?php

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // REFACTOR TO!
        // $this->call(UsersTableSeeder::class);

        Model::unguard();

        DB::table('users')->delete();

        $users = array(
            ['name' => 'Ratko Nikolovski', 'email' => 'sindikat89@gmail.com', 'password' => Hash::make('254598')],
            ['name' => 'Natali Stefanovska', 'email' => 'stefanovska.natali@gmail.com', 'password' => Hash::make('254598')],
        );

        // Loop through each user above and create the record for them in the database
        foreach ($users as $user)
        {
            User::create($user);
        }

        Model::reguard();
    }
}