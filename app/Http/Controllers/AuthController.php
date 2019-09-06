<?php

namespace App\Http\Controllers;
use Auth,Adldap;
use Illuminate\Http\Request;
use App\Exceptions\ValidationException;
use App\Contracts\Repositories\UserRepositoryInterface;


class AuthController extends Controller
{
   
    public function index(){
        return view('auth.login');
    }

}
