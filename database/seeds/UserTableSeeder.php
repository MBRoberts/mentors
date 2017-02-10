<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User();
        $user->name = 'Ben';
        $user->email = 'ben@email.com';
        $user->password = bcrypt('pass');
        $user->bio = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eius atque qui iste quasi minima inventore asperiores aperiam, esse saepe sequi facere fugit perspiciatis numquam id doloribus ea recusandae magnam.';
        $user->role_id = 1;
        $user->cohort_id = 1;
        $user->remember_token = str_random(10);
        $user->save();
    }
}
