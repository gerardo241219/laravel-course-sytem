<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// This route will return a simple greeting message when accessed.
Route::get('/greeting', function () {
    return 'Hello, World!';
});


/*

Methods to define routes for different HTTP verbs:

Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);

Routes can also be defined to respond to multiple HTTP verbs:
Route::match(['get', 'post'], $uri, $callback);

Responds to all HTTP verbs
Route::any($uri, $callback); 

*/

/*

Redirecting Routes:
By default, the redirect method issues a 302 status code. You can specify a different status code as the third argument:

Route::redirect('/from', '/to', 301);

Or you may use Route::permanentRedirect('/from', '/to'); // This will issue a 301 status code

*/

/*

View Routes:
If you need to return a view from a route, you may use the Route::view method. This method accepts the URI and the name of the view to return:
Route::view('/welcome', 'welcome');

If you need to pass data to the view, you may provide an array of data as the third argument to the view method:
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

*/

/*

Route Parameters:
Route parameters are segments of the URI that are captured and passed to the route's callback function. You can define a route parameter by placing it within curly braces {} in the route URI. For example
Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});

Defining Optional Parameters:
You may define a route parameter as optional by placing a ? after the parameter name in the route URI. When defining an optional parameter, you should give it a default value in the route's callback function. For example:
Route::get('/user/{name?}', function ($name = 'Guest') {
    return 'User '.$name;
});

Defining many parameters:
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post '.$postId.' Comment '.$commentId;
});
*/

/*
Named Routes:
You may assign a name to a route by using the name method on the route definition. This allows you to generate URLs or redirects for the route by using the route's name instead of its URI
Route::get('/user/profile', function () {
    // ...
})->name('profile');

You can generate a URL for the named route using the route function:
$url = route('profile');

You can also generate a redirect to the named route using the redirect function:
return redirect()->route('profile');

With route parameters, you can pass an array of parameters to the route function:
Route::get('/user/{id}/profile', function ($id) {
    // ...
})->name('profile');

$url = route('profile', ['id' => 1]);
*/

/*

Route Groups:
Route groups allow you to share route attributes, such as middleware or namespaces, across a large number of routes without needing to define those attributes on each individual route. For example, you may group routes
that share the same middleware:
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        // Uses auth middleware
    });
    Route::get('/account', function () {
        // Uses auth middleware
    });
});


*/