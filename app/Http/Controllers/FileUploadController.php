<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
   public function index(){
    return view('file-upload');
   }
   public function upload(Request $request){
    // p($request->all());
    $fileName=time().'LRA.'.$request->file('file')->getclientoriginalExtension();
    $request->file('file')->storeAs('uploads',$fileName);
   }
}
