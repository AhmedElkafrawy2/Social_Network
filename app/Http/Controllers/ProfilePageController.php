<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ProfilePageController extends Controller
{
    
    /*
     * function to get the user gender to upload image depending on it
     * 
     */
    
    public function getusergender(){
        
        $profiledisplay;
        $hasprofile;
        $coverimagedis;
        $profileimage = Auth::user()->profile_image;
        $coverimage = Auth::user()->cover_image;
        $gender = Auth::user()->gender; 
        if($profileimage == ""){
          if($gender == "male"){
              
              $profiledisplay = "http://localhost:8000/images/core/male.jpg";
              $hasprofile=0;
          }else{
              
              $profiledisplay = "http://localhost:8000/images/core/female.png";
              $hasprofile = 0 ;
              
          }
        }else{
            
            $profiledisplay = $profileimage;
            $hasprofile = 1;
        }
        
        
        if($coverimage == ""){
          $coverimagedis = "http://localhost:8000/images/core/coverdefaule.jpg";
        }else{
          $coverimagedis = $coverimage;
        }
        $data = array("cover" => $coverimagedis ,"profile" => $profiledisplay,"hasprofile" => $hasprofile);
        return $data;
    }
    
    /*
     * this function is to determine if the variable username that has been send from 
     * from route is equal to the auth uaer  
     */
    public function handleifauth($username){
   
        
        $user_auth_unique_id = DB::table('users')->select('unique_user_id')->where("unique_user_id" , Auth::user()->unique_user_id)->first();
        $user_normal_unique_id = DB::table('users')->select()->where("unique_user_id" , $username)->first();
        
        $acualname1 = DB::table('users')->select('firstname')->where("unique_user_id" , $username)->first();
        $acualname2 = DB::table('users')->select('lastname')->where("unique_user_id" , $username)->first();
        
        // select from users table additional user info
        
        $useradditionalinfo = DB::table("users")->where("unique_user_id" , $username)->first();
        
        $edu = $useradditionalinfo->education;
        $birrh = $useradditionalinfo->birthday;
        $gender = $useradditionalinfo->gender;
        $work = $useradditionalinfo->work;
        $socail = $useradditionalinfo->socialstatus;
        
        $hasinfo;
        
        if($edu == "" && $birrh == "" && $gender == "" && $work == "" && $socail == ""){
            
            $hasinfo = 0 ;
            
        }else{
            
            $hasinfo = 1 ;
        }
        
        // check if it's user on not to send friend request
        
        //$usertosend = DB::table("users")->select()
             //   ->where("unique_user_id",$user_normal_unique_id->id)->first();
        
        
        $useidtodend = $user_normal_unique_id->id;
        $userauthid = Auth::user()->id;
        
        $checkifsendbefor1 = DB::table("add_friends")->select()
                ->where([
                    ["user_send_id",$useidtodend],
                    ["user_recive_id",$userauthid]
                ])->first();

        $checkifsendbefor2 = DB::table("add_friends")->select()
                ->where("user_send_id",$userauthid)->where("user_recive_id",$useidtodend)->first();
        
        //$count1 = $checkifsendbefor1->id;
        //$count2 = $checkifsendbefor2->id;
        
        $isfriend;
        if($checkifsendbefor1 !== null || $checkifsendbefor2 !== null){
            
            if($checkifsendbefor1 !== null){
                // i send to him friend request befor
                $isfriend  = 1;
            }else if($checkifsendbefor2 !== null){
                // he send to me friend request befor
                $isfriend = 2;
            }
          
        }else{
            // not friend request
            $isfriend = 0;
        }
        
        
        
        
        $acualname = $acualname1->firstname . " " . $acualname2->lastname;
        $isauth;
        $user = Auth::user()->firstname . Auth::user()->lastname ; 
        if($user_auth_unique_id->unique_user_id == $user_normal_unique_id->unique_user_id){       
            $isauth = 1;
        }else{           
            $isauth = 0;
        } 
         $data = array(
             "isauth" => $isauth , 
             "username" => $acualname  , 
             "user" => $user,
             "education" => $edu,
             "birthday" =>$birrh,
             "gender" => $gender,
             "work" => $work,
             "social" =>$socail,
             "hasinfo" => $hasinfo,
             "isfriend" => $isfriend
             );
         
         return $data;
    }
    
    public function userprofilepage($username){
        
        $userimage = $this->getusergender();
        $returneddata = $this->handleifauth($username);
        
        
        return view('profile.profile')->with($returneddata)->with($userimage);
        
        
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
    
    public function uploadprofileimage(Request $request){
        
        
        if($request->hasFile("image")){
                
           
            
            if (! File::exists(public_path()."/images/". Auth::user()->email)) {
                 
                 File::makeDirectory(public_path()."/images/".Auth::user()->email);
                 
             }
             $file = $request->file("image");
             $imagename = time()."-".$file->getClientOriginalName();
             $file->move(public_path("/images/".Auth::user()->email), $imagename);
             
             return "http://localhost:8000/images/" . Auth::user()->email. "/" . $imagename;
        }
      
    }
    
    public function cropimage(Request $request){
        
        $filenametoremove = $request->input("removedimage");
       
        //return $filenametoremove;
        if($request->hasFile("croppedImage")){
                
           
            
            if (! File::exists(public_path()."/images/". Auth::user()->email)) {
                 
                 File::makeDirectory(public_path()."/images/".Auth::user()->email);
                 
             }
             
             $file = $request->file("croppedImage");
             $imagenamecrop = time() . ".png";
             $file->move(public_path("/images/".Auth::user()->email), $imagenamecrop);

              //$filename33 = public_path().'/images/' . Auth::user()->email .$filenametoremove;
              //return $filename33;
              //unlink($filename33);
             // File::delete($filename33);
             $finalimagedisplay = "http://localhost:8000/images/" . Auth::user()->email. "/" . $imagenamecrop;
             
             if($request->input("senddata") == "profile"){
                  User::where("id",Auth::user()->id)->update(array("profile_image" => $finalimagedisplay));   
                  
                  // make post that user change his profile image
                  
                  $post = new Post;
                  $post->user_id = Auth::user()->id;
                  $post->post_text = Auth::user()->firstname . Auth::user()->lastname . "change his profile image";
                  $post->post_images = $finalimagedisplay;
                  $post->save();
             }else{
                 
                 User::where("id",Auth::user()->id)->update(array("cover_image" => $finalimagedisplay));
             
                 $post = new Post;
                 $post->user_id = Auth::user()->id;
                 $post->post_text = Auth::user()->firstname . Auth::user()->lastname . "change his Cover image";
                 $post->post_images = $finalimagedisplay;
                 $post->save();
             }
             
             
             return $finalimagedisplay;
        }  
        
    }
}
