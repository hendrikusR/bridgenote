<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = \DB::table('users')->select('name','email')->get();
        return view('dashboard',['users' => $users]);
    }

    public function view()
    {

    }
}
