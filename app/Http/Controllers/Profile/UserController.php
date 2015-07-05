<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showProfile(){
        echo "inside showProfile";
    }

}
