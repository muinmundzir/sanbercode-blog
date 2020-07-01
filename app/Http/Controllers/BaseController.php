<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(){
        $title = 'Home';
        return view('main', with(['title' => $title]));
    }

    public function data(){
        $title = 'Data Tables';
        return view('data_tables', with(['title' => $title]));
    }
}
