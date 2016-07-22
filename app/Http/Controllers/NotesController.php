<?php

namespace course\Http\Controllers;

use Illuminate\Http\Request;



use course\Note;

class NotesController extends Controller
{
   public function index(){


       $notes = Note::all();


       return view('notes/list', compact('notes'));



   }
    
    public function create(){

        return view ('notes/create');
    }

    public function store(Request $request){

        $this->validate($request , [
            'note'=>['required','max:200']

        ]);
        $data =request()->all();
        //return request()->get('note');
        //return request()->only(['note']);
        Note::create($data);


        return redirect()->to('notes');
        //return Redirect::to('notes');
    }

    public function show($note){

        dd($note);

    }

}
