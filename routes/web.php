<?php

use App\Models\Comment;
use App\Models\Song;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\VarDumper\Cloner\Data;

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

Route::get('/', function () {
    $data=App\Models\Song::all();
    return view('homepage')->with('data',$data);
});
Route::get('/song/{id}', function ($id) {
    $data1=App\Models\Song::find($id);
    $data2=App\Models\Comment::where('song_id',$id)->get();

    return view('song')->with('data1',$data1)->with('data2',$data2);
});
Route::Post('/song/{id}', function ($id) {
    $comm=new Comment;
    $comm->user_name=$_POST['name'];
    $comm->song_id=$id;
    $comm->comm=$_POST['comment'];
    $comm->releasedat= date("Y-m-d");
    $comm->save();

    return Redirect::back();
});
