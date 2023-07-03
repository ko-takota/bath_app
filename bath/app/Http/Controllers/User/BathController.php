<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BathController extends Controller
{
    public function add()
    {
        return view('user.bath.index');
    }
}
