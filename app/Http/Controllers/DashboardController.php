<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('superadmin'))
        {
            return view('admin.index');
        }else{
            return view('home');
        }
    }
}
