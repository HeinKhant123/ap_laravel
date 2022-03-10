 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/', [HomeController::class, 'index']);
// Route::get('contact', [HomeController::class, 'contact']);
// Route::get('about', [HomeController::class, 'about']);



// // Route::get('/', function () {
// //    $data = [
// //        'home_key'=> 'home_value',
// //    ];
// //     return view('home',compact('data'));
// // });

// Route::get('contact', function () {
//     $data = [
//         'contact_key'=> 'contact_value',
//     ];
//     return view('contact',compact('data'));
// });

// Route::get('about', function () {
//     $data = [
//         'about_key'=> 'about_value',
//     ];
//     return view('about',compact('data'));
// });

// Route::get('contact',function (){
//     //  $data="<script>alert('Boom')</script>";
//     // return view('contact',['data=>$data']);
//     // return 'welcome from laravel';
//     // $data = 'some data';
//     $data = request('name');
//     // return $data;
//     return view('contact',['data'=>$data]);
// });

// Route::get('contact/{name}',function($name){
//     return $name;
//     return view('contact',['data'=>$data]);
// });