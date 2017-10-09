<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfilePageController extends Controller
{
    
    /*
     * this function is to determine if the variable username that has been send from 
     * from route is equal to the auth uaer  
     */
    public function handleifauth($username){
       
        $isauth;
        $user = Auth::user()->firstname . Auth::user()->lastname ; 
        if($username == $user){       
            $isauth = 1;
        }else{           
            $isauth = 0;
        } 
         $data = array("isauth" => $isauth , "username" => $username , "user" => $user);
         return $data;
    }
    
    public function userprofilepage($username){
        
        
        $returneddata = $this->handleifauth($username);
        return view('profile.profile')->with($returneddata);
    }
    
    
    public function friends($username){
        
        $returneddata = $this->handleifauth($username);
        return view('profile.friendspage')->with($returneddata);
    }
    public function pages($username){
        
        $returneddata = $this->handleifauth($username);
        return view('profile.pagespage')->with($returneddata);
    }
    public function groups($username){
        
        $returneddata = $this->handleifauth($username);
        return view('profile.groupspage')->with($returneddata);
    }
    public function events($username){
        
        $returneddata = $this->handleifauth($username);
        return view('profile.eventspage')->with($returneddata);
    }
}
