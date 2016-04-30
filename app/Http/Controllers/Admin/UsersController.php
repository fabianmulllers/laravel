<?php

namespace course\Http\Controllers\Admin;

use course\Http\Requests\CreateUserRequest;
use course\Http\Requests\EditUserRequest;
use Illuminate\Http\Request as Requests;
use course\Http\Controllers\Controller;
use course\User;
//use course\Http\Requests as ;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request ;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{


   //public function __construct(Requests $request)
    public function __construct()
   {
      // $this->request = $request;
      // $this->beforeFilter('@findUser',['only'=>['show','edit','update','delete']]);
   }

public function findUser(){}
    public function index(){

        $users= User::orderBy('id','DES')
        ->paginate();


      return view('admin.users.index',compact('users'));

    }

    public function create(){

        return view('admin.users.create');
    }

    //public function store(Requests $request){
    public function store(CreateUserRequest $request){

  //dd(Request::all());
       // dd($request->all());

       /* $user = new user($request->all());
        $user->save(); */


       /* $user = new user();
        $user->fill($request->all());
        $user->save();*/
       //  /Validator::    se hace referencia al alias global sin agregar un use en el namespace
        //$data = Request::all();

        /*$rules=[
            'first_name' =>'required',
            'last_name'=>'required',
            'email'=> 'required',
            'password'=>'required',
            'type' => 'required'
            
            
            
        ];*/
      //  $this->validate($request,$rules);
/*
        $v=Validator::make($data,$rules);
        if($v->fails()){

            return redirect()->back()
                ->withErrors($v->errors())
                ->withInput(Request::except('password'));

        }*/
        $user= User::create($request->all() );
        return Redirect::route('admin.users.index');

    }

    public function edit($id){

        $user= User::findOrFail($id);

        return view('admin.users.edit',compact('user'));
    }

    public function update(EditUserRequest $request,$id){

        $user= User::findOrFail($id);
        //$user->fill(Request::all());
        $user->fill($request->all());
        $user->save();
       // return view('admin.users.edit',compact('user'));
        return Redirect::back();

    }

    public function destroy($id){
        //abort(500);

        //return $id;
        $user= User::findOrFail($id);
        //User::destroy($id);
        $user->delete();

   $message=$user->fullname.' fue eliminado';
        if(request::ajax()){
           // return $message;
            return response()->json([
                'id'  => $id,
                'message' => $message
                ]);

        }
        Session::flash('message',$message);
        return redirect()->route('admin.users.index');

    }
}
