<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.dashboard');
    }

    public function viewUsers() {
        return view('admin.users');
    }

    public function editUser() {
        return view('admin.edituser');
    }
}
