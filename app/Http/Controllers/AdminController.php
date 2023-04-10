<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Index(){
        return view();

    }//end method
    public function Dashboard(){
        return view('ui.index');

    }//end method
}
