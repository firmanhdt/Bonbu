<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Address::where('user_id', Auth::id())->get();
        return view('address', compact('addresses')); // sesuaikan dengan view kamu
    }

    public function create()
    {
        return view('address-add'); // sesuai view kamu
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'details' => 'nullable|string|max:255',
            'label' => 'nullable|string|max:255',
            'recipient_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        Address::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'details' => $request->details,
            'label' => $request->label,
            'recipient_name' => $request->recipient_name,
            'phone' => $request->phone,
        ]);

        return redirect()->back()->with('success', 'Address saved successfully!');
    }

    public function edit($id)
    {
        $address = Address::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        return view('address-edit', compact('address'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'details' => 'nullable|string|max:255',
        'label' => 'nullable|string|max:255',
        'recipient_name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
    ]);

    $address = Address::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
    $address->update([
        'name' => $request->name,
        'details' => $request->details,
        'label' => $request->label,
        'recipient_name' => $request->recipient_name,
        'phone' => $request->phone,
    ]);

    return redirect()->route('address.index')->with('success', 'Address updated successfully!');
}


}
