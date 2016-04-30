<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
class AdminTableSeeder extends Seeder {
    //put your code here
    
    public function run()
            {
        DB::table('users')->insert([
            'first_name'=> 'jose',
            'last_name'=>'jose',
            'email' => 'jose@jose.cl',
            'password' => bcrypt('jose'),
            'type' => 'admin',
            
        ]);

         DB::table('user_profiles')->insert([
             'user_id' => 1,
             'birthdate' => '1989/02/18'
         ]);
    }
}
