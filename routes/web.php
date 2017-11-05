<?php



Route::get('/', function () {
 return view('welcome');
});

Auth::routes();


Route::get('/home' , 'HomeController@index')->name('home');

Route::post("/post/insert" , "PostsController@insertpost")->name("insertpost");

Route::prefix('/{username}')->group(function (){
    
    Route::get('/', "ProfilePageController@userprofilepage")->name("profile");
    Route::get("/friends" , "ProfilePageController@friends")->name("friends");
    Route::get("/pages" , "ProfilePageController@pages")->name("pages");
    Route::get("/groups" , "ProfilePageController@groups")->name("groups");
    Route::get("/events" , "ProfilePageController@events")->name("events");
    
});

// route to upload profile imge from device to server and display iy

Route::post("/profile/upload","ProfilePageController@uploadprofileimage");
// route to crop profile imge

Route::post("/profile/cropimage","ProfilePageController@cropimage");




 


