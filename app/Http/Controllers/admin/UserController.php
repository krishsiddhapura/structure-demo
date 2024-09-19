<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Index Page
    public function index()
    {
        return view('admin.user.index');
    }
}
