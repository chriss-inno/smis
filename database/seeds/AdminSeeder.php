<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();

        $user=new User;
        $user->name = 'Administrator';
        $user->email = 'admin@smis.com';
        $user->username = 'admin';
        $user->role = 'Superuser';
        $user->password = bcrypt('admin');
        $user->save();
    }
}
