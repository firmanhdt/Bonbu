<?php

namespace App\Http\Controllers;

use App\Models\User;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = User::all();
        return view('admin.user-management', compact('customers'));
    }
}
