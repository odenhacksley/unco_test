<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
         [
         'name' => 'unknown author',
         'email' => 'unknown@gmail.com',
         'password'=> bcrypt('unknown'),
          ],

         [
             'name' => 'author',
             'email' => 'known@gmail.com',
             'password'=> bcrypt('qwerty'),

         ],

        ];
     DB::table('users')->insert($data);
    }
}
