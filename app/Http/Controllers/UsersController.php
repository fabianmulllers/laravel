<?php
/**
 * Created by PhpStorm.
 * User: fabian
 * Date: 21-04-16
 * Time: 17:23
 */

namespace course\Http\Controllers;


use course\User;

class UsersController extends Controller
{

    public function getOrm(){

        //$result=User::first();
         //$user=User::first();
         $users=User::select('id','first_name')
             ->with('profile')
         ->where('first_name','<>','jose')
             ->orderBy('first_name','ASC')
             ->get();

         dd($users->toArray());
       // dd($user->profile->age);
        //dd($result->getFullNameAttribute());

    }



    public function getIndex(){
      $result= \DB::table('users')
         // ->select(['users.first_name','users.last_name'])
        // ->select('first_name','last_name')
         //->where('first_name','jose')
        /* ->select(
             'users.id',
             'first_name',
             'last_name',
             'user_profiles.id as profile_id')*/
         ->select(
             'users.*',
             'user_profiles.id as profile_id',
             'user_profiles.twitter as twit',
             'user_profiles.birthdate')
       // ->where('first_name','<>','jose')
           //  ->orderBy('id','ASC')
           ->orderBy(\DB::raw('random()'))
          //->join('user_profiles','users.id','=','user_profiles.user_id')
           ->leftJoin('user_profiles','users.id','=','user_profiles.user_id')
         ->get();
        //->first();
    // dd($result);
      // dd($result->first_name.' '.$result->last_name );

       // $fullname = $result->first_name.' '.$result->last_name;
        //$result->fullname = $result->first_name.' '.$result->last_name;
        //dd ($fullname);
        //dd($result->fullname);
        foreach($result as $row){

            $row->fullname = $row->first_name.' '.$row->last_name;
            $row->age= \Carbon\Carbon::parse($row->birthdate)->age;
        }

        dd($result);
        return $result;
    }

}