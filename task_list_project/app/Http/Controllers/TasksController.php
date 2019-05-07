<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        // $aryList= [
        //     "GO Shopping",
        //     "Feed Dog"
        // ];
        $aryList = \App\Task::all();
        return view('tasks.index',[
            'title'=> request('aTitle'),
            'tasklist' => $aryList
        ]);
    }
}
