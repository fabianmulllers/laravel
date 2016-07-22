<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use course\Note;

class NotesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    //use WithoutMiddleware;
    public function test_notes_list()
    {
        //having

        Note::create(['note' => 'My first note']);
        Note::create(['note'=>'second note']);

        //when
        $this->visit('notes')
            //then
        ->see('My first note')
            ->see('second note');
    }
    
    
    public function test_create_note(){
         //Route::post('notes')
        //when
        $this->visit('notes')
            //then;''
                ->click('Add a note')
            ->seePageIs('notes/create')
            ->see('Creating a note')
            ->type('A new note' ,'note')
            ->press('Create note')
            ->seePageIs('notes')
            ->see('A new note')
        ->seeInDatabase('notes',
        [
            'note' =>'A new note'
        ]);
        
    }
}
