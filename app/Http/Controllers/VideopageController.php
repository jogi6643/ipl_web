<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class VideopageController extends Controller{
    public function videopage(){
        return view('videopage');
    }
}