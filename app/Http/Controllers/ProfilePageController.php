<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilePageController extends Controller
{
    public function userprofilepage($username){
        
        
        return view('profile');
    }
}
