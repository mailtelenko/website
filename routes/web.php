
<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@getBlog');

Route::get('/about', 'PagesController@getAbout');

Route::get("/admin", ['uses' => 'PagesController@getAdmin', 'middleware' => 'auth']);

Route::get("/admin/post", ['uses' => 'PagesController@getAdminPost', 'middleware' => 'auth']);

Route::get("/admin/users", ['uses' => 'PagesController@getAdminUser', 'middleware' => 'auth']);

Route::get("/admin/settings", ['uses' => 'PagesController@getAdminSettings', 'middleware' => 'auth']);

Route::get("/blog", "PagesController@getBlog");

Route::get("/blog/posts", "PagesController@getPosts");

Route::get("/contact", "PagesController@getContact");

Route::get("/error404", "PagesController@error404");

Route::get("/home", ['uses' => 'PagesController@getAdmin', 'middleware' => 'auth']);

Route::resource('posts','PostController');

Route::resource('authors','AuthorController');

Auth::routes();

Route::any('/search',function(){
    $search = \Input::get ( 'query' );
    $searchPost = \App\Post::where('title','LIKE','%'.$search.'%')->orWhere('author','LIKE','%'.$search.'%')->orWhere('tags','LIKE','%'.$search.'%')->get();
    $articleType = \Input::get('type');

    $returnView = "posts";

    if(count($searchPost) > 0)
        return view($returnView)->withSearch($searchPost)->withQuery($search);
    else 
        return view ($returnView)->withMessage('No posts found')->withQuery($search);
});

Route::group(['domain' => 'edgy.liamtelenko.tk'], function() {
    Route::get("/", "PagesController@getETM");
});