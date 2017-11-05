<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use File;
use App\Post;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
{


    public function insertpost(Request $request){
        
        $posttext      = $request->input("posttext");
        $emotion       = $request->input("emotion");
        $postPrivacy   = $request->input("postPrivacy");

        
        //$request->hasFile('image')
        $arrayofimages = "|";
        if($request->hasFile('0')){
            
          $numersofimages = $request->input("numerofimages");
         if (! File::exists(public_path()."/images/". Auth::user()->email)) {
             File::makeDirectory(public_path()."/images/".Auth::user()->email);
         }
         
         for($i = 0; $i <= $numersofimages ; $i++){
             
             $file = $request->file($i);
             $imagename = time()."-".$file->getClientOriginalName();
             $file->move(public_path("/images/".Auth::user()->email), $imagename);
             $arrayofimages .= $imagename . "|";
             
          
          }
         }
         
        $arrayofimages =  rtrim($arrayofimages, "|");
        $arrayofimages =  ltrim($arrayofimages, "|");
         
        // insert data into posts table;
        /*
         DB::table('posts')->insert(
           [
             'user_id' => Auth::user()->id, 
             'post_text' => $posttext ,
             'post_images' => $arrayofimages,
             'post_emotions' => $emotion,
             'post_privacy' => $postPrivacy
               
           ]
         
        );
         */
        $post = new Post;

        $post->user_id = Auth::user()->id;
        $post->post_text = $posttext;
        $post->post_images = $arrayofimages;
        $post->post_emotions = $emotion;
        $post->post_privacy = $postPrivacy;

        $post->save();
        
        if($post){
            
            return "post";
        }
        
    }
}
