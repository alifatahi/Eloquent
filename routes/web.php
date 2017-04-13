<?php
Route::get('/',[
    'uses' => 'PostController@getPost' ,
    'as'   => 'post.get'
]);

Route::get('/profile/{username}',[
    'uses' => 'PostController@getUser' ,
    'as'   => 'post.user'
]);