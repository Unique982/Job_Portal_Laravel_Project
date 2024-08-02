<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    // show user registration page
    public function registration(){
        return view('frontend.account.registation');
    }
    // show user login page
    public function login(){
        return view('frontend.account.login');

    }
    public function job(){
        return view('frontend.job_post');

    }
    public function details(){
        return view('frontend.single_job_details');

    }

}
