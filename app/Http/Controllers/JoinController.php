<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class JoinController extends Controller
{
    public function index(){
        return Member::with('getGroups')->get();
    }
}

 