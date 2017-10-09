<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use File;
class PostsController extends Controller
{


    public function insertpost(Request $request){
        
        $posttext      = $request->input("posttext");
        $emotion       = $request->input("emotion");
        $postPrivacy   = $request->input("postPrivacy");

         if($request->hasFile('image')){
          
             
             
         if (! File::exists(public_path()."/images/". Auth::user()->email)) {
             File::makeDirectory(public_path()."/images/".Auth::user()->email);
         }
         $names = [];
         $files[] = $request->file('image');
         return count($request->file('image'));
            
         foreach ($files as $file) {
          $names[] = $file->getClientOriginalName();
         }
           
         
         //$holddata[];
         $images = $request->file('image');
         foreach($images as $image){
             
            $filename  = time()."-".$image->getClientOriginalName();
            $image->move(public_path("/images/".Auth::user()->email), $filename);
           
         }
  
        //$content = $request->getContent();
        //data = json_decode($content, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        
        //return response()->json(['success'=>'Added new records.']);
         }
          
    }
}
