<?php
use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\PostsController;

use Illuminate\Support\Facades\Route;

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
//     // return ("hii you"); 
// });
// Route::get('/about', function () {
//     // return view('welcome');
//      return ("hii about"); 
// });
// Route::get('/contact', function () {
//     // return view('welcome');
//      return ("hii contact"); 
// });
// //pass id or any parameter in url 
// Route::get('/post/{id}/{name}', function ($id,$name) {
//     // return view('welcome');
//      return "hii this is post  ". $id."  ".$name; 
// });
// //nick name to routes
// Route::get('admin/post/exam',array('as'=>'admin.home',function(){
// $url=route('admin.home');

// return "this url is" . $url;
// }));
//to see all route created in project in terminal ---- write---php artisan route:list


//information is passed to newController and there already exist a function so we dnt hve to create here 
// Route::get('/post/{id}','\App\Http\Controllers\newController@index');

//controller methods php artisan route:list
// Route::resource('post','\App\Http\Controllers\newController');

// Route::get('contact', function(){
//     return view('contact');
//    });
// Route::get('post', function(){
//     return view('post');
//    });

//    Route::resource('new/{id}/{name}','\App\Http\Controllers\PostsController');
   /*
|--------------------------------------------------------------------------
| Database raw sql queries 
|--------------------------------------------------------------------------*/
// Route::get('/insert',function(){
// DB::insert('insert into posts(title,body1 )values(?,?)',['html','html is best']);
// });

// Route::get('/read',function(){
//     $results=DB::select('select * from posts where id=?',[1]);
//     // return($results);
//     foreach($results as $post){

//         return $post->title;
//     }
    
//     });

// Route::get('/update',function(){
//     $update=DB::update('update posts set title="update title" where id=?',[1]);
    
//     return $update;
//     });

// Route::get('/delete',function(){
//     $deleted=DB::delete('Delete from posts where id=?',[1]);
    
//     return $deleted;
//     });

/*
|--------------------------------------------------------------------------
| Eloquent
|--------------------------------------------------------------------------*/

// Route::get('/read',function(){
// //refereing to the class or directorty

// $posts = Post::all();

// foreach($posts as $post){
//    return $post->title;
// }


// });
// Route::get('/find',function(){
//    //refereing to the class or directorty
   
//    $post = Post::find(1);
//    return $post->title;
//    // foreach($posts as $post){
//    //    return $post->title;
//    // }
   
   
//    });
// Route::get('/findwhere',function(){
  
   
//    $posts = Post::where('id',1)->orderBy('id','desc')->take(1)->get();
//    return $posts;
//    // foreach($posts as $post){
//    //    return $post->title;
//    // }
   
   
//    });

// Route::get('/findmore',function(){
  
   
//    // $posts = Post::findOrFail(3);
//    // return $posts;
   
//    $posts = Post::where('users_count','<',50)->findOrFail();
   
//    });


//insert record in table
// Route::get('/basicInsert',function(){

// $post = new Post;
// $post->Title='eloquent';
// $post->body1='new eloquent';
// $post->save();

// });

//find and update in table 
// Route::get('/basicupdate',function(){

//    $post = Post::find(1);
//    $post->Title='eloquent34';
//    $post->body1='new eloquent45';
//    $post->save();
   
//    });


//update data in data 
// Route::get('/update',function(){

//    Post::where('id',2)->where('is_admin',0)->update(['title'=>'new avisha title','body1'=>'new avisha page']);
   
//       });

//mass data insertion or  assignment  == changes are there in Post.php File too 

// Route::get('/create',function(){

// Post::create(['title'=>'the create method','body1'=>'learning php framework']);

//    });


//delete data 
// Route::get('/delete',function(){
// //find and delete

// //   $post=Post::Find(3);
// //   $post->delete();

// //delete direct 
// $post=Post::destroy(4);

//       });
// Route::get('/softdelete',function(){


   
// });

/*
|--------------------------------------------------------------------------
| eloquent relationship
|--------------------------------------------------------------------------*/

// Route::get('/user/{1}/post',function($id){
 
//    return User::find($id)->post;


// });

/////////crud application /////////////
Route::resource('/posts','\App\Http\Controllers\PostsController');