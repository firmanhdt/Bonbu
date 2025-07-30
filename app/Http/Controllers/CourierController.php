<?php

namespace App\Http\Controllers;

use App\Models\Courier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CourierController extends Controller
{
    public function index()
    {
        $couriers = Courier::all();
        return view('admin.courier', compact('couriers'));
    }

    public function create()
    {
        return view('admin.courier-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'motor_type' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email|unique:couriers,email',
            'plate_number' => 'required',
            'password' => 'required|min:6',
        ]);

        \App\Models\Courier::create([
            'name' => $request->name,
            'motor_type' => $request->motor_type,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'plate_number' => $request->plate_number,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.courier.index')->with('success', 'Courier added!');
    }
    public function destroy($id)
    {
        $courier = \App\Models\Courier::findOrFail($id);
        $courier->delete();

        return redirect()->route('admin.courier.index')->with('success', 'Courier deleted!');
    }
}
