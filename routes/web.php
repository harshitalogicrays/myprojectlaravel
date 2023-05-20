 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoController;
use App\Http\Controllers\singleactionController;
use App\Http\Controllers\photoController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\JoinController;

use App\Models\Customers;
use Illuminate\Http\Request;
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
// Route::get('/user',function(){
//     echo "User Route";
// });
// Route::post('/test',function(){
//     echo "testing route"; 
// });
// Route::any('/test',function(){
//     echo "testing route"; 
// });

// Route::get('/demo',function(){
//     return view('demo');
// });

/*Route::get('/demo/{name}/{id?}',function($name,$id=null){
    // echo $name," ",$id;
    $data=compact('name','id');
    // print_r($data);
    return  view('demo')->with($data); 
});
*/


// Route::get('/{name?}',function($name=null){
//     $demo="<h2>ggg</h2>";
//     $data=compact('name','demo');
//     return view('home')->with($data);
// });


/*Route::get('/',function(){
    return view('home');
});

Route::get('/about',function(){
    return view('about');
}); */


// Route::get('/',[demoController::class,'index']);
// Route::get('/about',[App\Http\Controllers\demoController::class,'about']);

Route::get('/about','App\Http\Controllers\demoController@about');

Route::get('/courses',singleactionController::class);
Route::resource('/photo',photoController::class);
Route::get('/register',[signupController::class,'index']);
Route::post('/register',[signupController::class,'register']);


// Route::get('/customer',function(){
//    $customers=Customers::all(); 
//    print_r($customers->toArray());
// });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

// Route::get('/customer',[customerController::class,'index']);
// Route::post('/customer',[customerController::class,'store'])->name('customer.create');
// Route::get('/customer/view',[customerController::class,'view'])->name('customer.view');
// Route::get('/customer/delete/{id}',[customerController::class,'delete'])->name('customer.delete');
// Route::get('/customer/edit/{id}',[customerController::class,'edit'])->name('customer.edit');
// Route::get('/customer/update/{id}',[customerController::class,'index'])->name('customer.update');
// Route::post('/customer/update/{id}',[customerController::class,'update']);

// Route::get('/customer/trash',[customerController::class,'trash'])->name('customer.trash');
// Route::get('/customer/restore/{id}',[customerController::class,'restore'])->name('customer.restore');
// Route::get('/customer/forcedelete/{id}',[customerController::class,'forcedelete'])->name('customer.forcedelete');
// Route::get('/customer/fileupload',[FileUploadController::class,'index']);
// Route::post('/customer/fileupload',[FileUploadController::class,'upload']);

// Route::group(['prefix'=>'/customer'],function(){
//     Route::get('/',[customerController::class,'index']);
//     Route::post('/',[customerController::class,'store'])->name('customer.create');
//     Route::get('/view',[customerController::class,'view'])->name('customer.view');
//     Route::get('/delete/{id}',[customerController::class,'delete'])->name('customer.delete');
//     Route::get('/edit/{id}',[customerController::class,'edit'])->name('customer.edit');
//     Route::get('/update/{id}',[customerController::class,'index'])->name('customer.update');
//     Route::post('/update/{id}',[customerController::class,'update']);

//     Route::get('/trash',[customerController::class,'trash'])->name('customer.trash');
//     Route::get('/restore/{id}',[customerController::class,'restore'])->name('customer.restore');
//     Route::get('/forcedelete/{id}',[customerController::class,'forcedelete'])->name('customer.forcedelete');
//     Route::get('/fileupload',[FileUploadController::class,'index']);
//     Route::post('/fileupload',[FileUploadController::class,'upload']);
// });

 
Route::get('/get-all-session',function(){
    $session=session()->all();
    p($session);
});

Route::get('set-session',function(Request $request){
    $request->session()->put('user_name','Harshita');
    $request->session()->put('user_id','1');
    $request->session()->flash('status','Success');
    // return redirect('get-all-session');
    return redirect('/');
});

Route::get('destory-session',function(){
   /* session()->forget('user_name');
    session()->forget('user_id'); */
    session()->forget(['user_id','user_name']);
    // return redirect('get-all-session');
    return redirect('/');
});

Route::get('/join',[JoinController::class,'index']);
Route::get('/no-access',function(){
    echo("You are not allowed to access this page");
    die;
}); 
Route::get('/customer',[customerController::class,'index']);
Route::post('/customer',[customerController::class,'store'])->name('customer.create')->middleware('guard');
Route::get('/customer/view',[customerController::class,'view'])->name('customer.view')->middleware('guard');
Route::get('/customer/delete/{id}',[customerController::class,'delete'])->name('customer.delete')->middleware('guard'); 
Route::get('/customer/edit/{id}',[customerController::class,'edit'])->name('customer.edit')->middleware('guard');
Route::get('/customer/update/{id}',[customerController::class,'index'])->name('customer.update')->middleware('guard');
Route::post('/customer/update/{id}',[customerController::class,'update'])->middleware('guard');

Route::get('/customer/trash',[customerController::class,'trash'])->name('customer.trash');
Route::get('/customer/restore/{id}',[customerController::class,'restore'])->name('customer.restore');
Route::get('/customer/forcedelete/{id}',[customerController::class,'forcedelete'])->name('customer.forcedelete');
Route::get('/customer/fileupload',[FileUploadController::class,'index']);
Route::post('/customer/fileupload',[FileUploadController::class,'upload']);

Route::get('/{lang?}',[demoController::class,'index']);