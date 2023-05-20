<?php
// php artisan make:controller demoController
namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;

class demoController extends Controller
{
    public function index($lang=null){
        App::setLocale($lang);
        return view('home');
    }
    public function about(){
        return view('about');
    }
}

?>