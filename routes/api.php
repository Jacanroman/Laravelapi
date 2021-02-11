<?php

//use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

/*
Route::get('/testing-the-api',function(){
    return ['message'=>'hello'];
});
*/


/*posts
CRUD IS BASICALLY
1.get all (GET) /api/posts
2.create a post (POST)  /api/posts
3. get a single (GET)   /api/posts/{id}
4. update a single (PUT) /api/posts/{id}
5. delete (DELETE)      /api/posts/{id}

Route::get('/posts', function(){

    $post = Post::create(['title'=>'my first post','slug'=>'my-first-post']);

    return $post;
});


//Create post
Route::post('/posts')


//Update posts
Route::put('/posts/{id}')


//Delete posts
Route::delete('/posts/{id}')

Esto mejor que hacerlo aqui se hace en un controlador
en este caso PostController

*/


Route::get('/posts','PostController@index');
Route::post('/posts','PostController@store');
Route::put('/posts','PostController@update');
Route::delete('/posts','PostController@destroy');

/*camino corto para lo anterior 
Route::resource('posts','PostController');

*/


Route::resource('posts','PostController');


/*if in the route we want api/v1/posts api/v2/posts

Route::prefix('v1')->group(function(){
    Route::apiResource('posts','PostController');
});

*/



//to create a resource(posts) in laravel
//1 create the database and migrations
//2 create a model
//2.5 create a service? Eloquent ORM
//3. create a controller to go get info from de database
//4 return that info




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
