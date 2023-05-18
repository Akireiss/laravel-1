<?php

use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ClassroomController;
use Symfony\Component\HttpFoundation\Response;

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

// Route::get('/', function () {
//     return view('welcome');
// });




//Route::get(); //to get an info
//Route::post(); //to post or to add //
//Route::put(); //update or edit | tatanngagalin ung data and papalitan ng bago //kabuuan ng data
//Route::delete(); //to delete
//Route::patch(); // papalitan lang ng small portion ng data//small portion ng data



//GET Sample
// Route::get('/blog', [PostsController::class, 'index']);
// Route::get('blog/1', [PostsController::class, 'show']);

// //Post sample
// Route::get('blog/create', [PostsController::class, 'create']);
// Route::post('blog', [PostsController::class, 'store']);

// Route::get('blog/edit/1', [PostsController::class, 'edit']);
// Route::post('blog/1', [PostsController::class, 'update']);

// Route::delete('/blog/1', [PostsController::class, 'destroy']);

//Multiple http verbs
// Route::match (['GET', 'POST'], '/blog', [PostsController::class, 'index']);


// Route::get('/', HomeController::class);


//for post and get only
// Route::match(['post', 'get'], '/', function(){
// return 'POST and GET is allowed';

// });

//to any kind of route

// Route::any('/', function () {
//     return view('welcome');
// });
//shortcut

//Redirect Function
// Route::get('/', function () {
//     return 'redirect';
// });


// //temporary rediret: redirect
// //permanent redirect: permanentRedirect
// Route::redirect('/welcome', '/');

//Request
//dd: die and dump






//shortcut routes
//the first one is the route name and the second is the file name
// Route::view("welcome, welcome");


//request
// Route::get('/users', function (Request $request) {
//     dd($request);
//     return null;

// });


//Responses
// Route::get('/user/{id}/{group}', function ($id, $group){
// return response($id.'-'.$group, 300);
// });

//return using array or ajax
// Route::get('/request-json', function () {
    // return Response::json([
    //     'message' => 'Hello World',
    // ]);

// });

//Return with headers
// Route::get('/home1', function () {
//     return response('Hello World', 200)
//                   ->header('Content-Type', 'text/plain');
// });


//return download: it will return download
//header here will be array

// Route::get('/request-download', function () {
//     $path = public_path() . '/sample.txt'; //specify the path here, always use '/' before the filename becuase its a url
//     $name = "sample.txt"; //the file name
//     $headers = array(                           //user array for headers to specify the content type
//         'Content-Type: application/text/plain',
//     );
//     return response()->download($path, $name, $headers); //and here the variables
// });



//TYPES OF RESPONESES

// HTML responses - These are the most common type of response and are used to return HTML content to the user's browser.

// JSON responses - These are used to return data in a JSON format, which can be used to transfer data between servers and client-side applications.

// File downloads - These are used to send a file to the user's browser, which can be opened or saved by the user.

// Redirect responses - These are used to redirect the user to a different URL or route within the application.

// Error responses - These are used to return an error message or status code to the user, indicating that something went wrong during the request.

// View responses - These are used to return a view, which is a pre-defined HTML template that can be rendered with dynamic data.



//TYPES OF ROUTES
// GET routes: GET routes are used to handle HTTP GET requests. They are typically used to retrieve data from the server.

// POST routes: POST routes are used to handle HTTP POST requests. They are typically used to create new resources on the server.

// PUT routes: PUT routes are used to handle HTTP PUT requests. They are typically used to update existing resources on the server.

// DELETE routes: DELETE routes are used to handle HTTP DELETE requests. They are typically used to delete resources from the server.

// PATCH routes: PATCH routes are used to handle HTTP PATCH requests. They are typically used to update part of an existing resource on the server.




//types of request

    // GET request: A GET request is used to retrieve data from a server. It is typically used to retrieve a specific resource or a list of resources.

    // POST request: A POST request is used to send data to a server to create a new resource.

    // PUT request: A PUT request is used to update an existing resource on the server.

    // DELETE request: A DELETE request is used to delete a resource from the server.

    // PATCH request: A PATCH request is used to update part of an existing resource on the serve


Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login/process', [UserController::class, 'process']);

Route::get('/register', [UserController::class, 'register'])->name('register')->middleware('guest');
Route::post('/store', [UserController::class, 'store']);


Route::post('/logout', [UserController::class, 'logout']);


Route::controller(StudentController::class)->group(function(){
Route::get('/students', 'index');


//acccess the website
Route::get('/add/student', 'create');

//adding students to the form ussig crud

Route::post('/add/student', 'store');
// Route::get('/user', 'create']);

//edit
//show the tab(web)

Route::get('/student/{student}', 'show');

//edit the name
Route::put('/student/{student}', 'update');


//delete the data
Route::delete('/student/{student}', 'destroy');


Route::get('/', 'index')->middleware('auth');

Route::get('/report', 'dashboard');



    // Route::get('/students', 'student');
});


Route::controller(SubjectController::class)->group(function () {
    Route::get('subject/create', 'create');
    Route::post('subject/create', 'store');


});


Route::controller(LessonController::class)->group(function () {
    Route::get('lessons/create', 'create');
    Route::post('lessons/create', 'store');

});

Route::controller(SubjectController::class)->group(function () {
    Route::get('/subject', 'index');
    Route::post('subject/create', 'create');

});


Route::controller(IndexController::class)->group(function () {
    Route::get('/index', 'index');
    // Route::post('subject/create', 'create');

});

Route::controller(AccountController::class)->group(function () {
    Route::get('/account', 'index');

});



Route::controller(ClassroomController::class)->group(function () {
    Route::get('/classroom', 'index');
    Route::get('classroom/create', 'create');

    Route::post('classroom/create', 'store');
    //Edit Area
    Route::get('classroom/{classroom}', 'edit');


});





