<?php

use Illuminate\Database\Seeder;
use App\User;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = 'username';
        $password = 'password';
        for($i = 1; $i < 10; $i++){
            $user = new User;
            $user->name = $name.$i;
            $user->email = $name.$i."@gmail.com";
            $user->password = bcrypt($password);
            $user->role_id = rand(1,3);
            $user->save();
        }
    }
}
