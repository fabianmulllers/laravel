<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserTableSeeder
 *
 * @author fabian
 */
class UserTableSeeder extends Seeder {
    //put your code here
    
    public function run()
            {

                $faker = Faker::create();

                for ($i =0;$i< 30 ; $i ++) {
                    $id= DB::table('users')->insertGetId([
                        'first_name' => $faker->firstName,
                        'last_name' => $faker->lastName,
                        'email' => $faker->unique()->email,
                        'password' => bcrypt('123456'),
                        'type' => 'user',

                    ]);

                    DB::table('user_profiles')->insert([

                        'bio' => $faker->paragraph(rand(2,5)),
                        'website' => 'http://www.'.$faker->domainName,
                        'twitter' =>'http://www.twitter.com/'.$faker->userName,
                        'user_id' =>$id,

                    ]);
                }
    }
}
