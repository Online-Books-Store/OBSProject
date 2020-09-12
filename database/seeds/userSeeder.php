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
        for($i = 0; $i<4; $i++){
            $user = new User;
            $user->name = 'admin'.$i;
            $user->email = "admin".$i."@gmail.com";
            $user->password = bcrypt('password');
            if($i <=2 ){
                $user->status = 'admin';
            }
            $user->save();
        }
    }
}
