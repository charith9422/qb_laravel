<?php

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/* Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $category = Post::where('category','LIKE','%'.$q.'%')->get();
    if(count($category) > 0)
        return view('posts.index')->withDetails($category)->withQuery ( $q );
    else return view ('posts.index')->withMessage('No Questions found. Try to search again !');
}); */

