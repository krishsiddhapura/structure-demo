<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    // Index
    public function index(){
        return view('admin.dashboard.index');
    }

    // List Users
    public function listUsers()
    {
        $user =  User::latest();
        return DataTables::eloquent($user)
            ->addIndexColumn()
            ->addColumn('created_at', function ($user) {
                return dateToHuman($user->created_at,'Y/m/d');
            })
            ->make(true);
    }
}
