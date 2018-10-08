 <?php

Route::get("/", ['uses' => 'PagesController@getAdmin', 'middleware' => 'auth']);

Route::get("/post", ['uses' => 'PagesController@getAdminPost', 'middleware' => 'auth']);

Route::get("/users", ['uses' => 'PagesController@getAdminUser', 'middleware' => 'auth']);

Route::get("/settings", ['uses' => 'PagesController@getAdminSettings', 'middleware' => 'auth']);

?>