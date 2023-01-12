<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
     function admin(){
        return view('admin.index');
    }
}
