<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAddressRequest;
use App\Models\UserAddress;

class UserAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserAddressRequest $request)
    {
        // if request is validated, save user's address
        if (UserAddress::create($request->all())) {
            session()->flash('user.success', "Added a address successfully!");
        } else {
            session()->flash('user.error', "Added a address failed!");
        }

        return response()->json(['success' => true]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }


    /**
     * set default address
     */
    public function setDefault(string $id)
    {
        $userAddresses = UserAddress::where('is_primary', 1)
                                    ->where('user_id', \Auth::user()->id)
                                    ->get();
        foreach ($userAddresses as $userAddress) {
            $userAddress->is_primary = 0;
            $userAddress->save();
        }

        $defaultAddress = UserAddress::find($id);
        $defaultAddress->is_primary = true;
        if ($defaultAddress->save()) {
            session()->flash('user.success', 'Set default address successfully!');
        } else {
            session()->flash('user.error', 'Set default address failed!');
        }

        return redirect('/user/profile');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserAddressRequest $request, string $id)
    {
        // if request is validated, save user's address
        $validated = $request->all();
        $userAddress = UserAddress::where('user_id', $validated['user_id'])
                                  ->where('id', $id)->first();
        $userAddress->street = $validated['street'];
        $userAddress->postal_code = $validated['postal_code'];
        $userAddress->city = $validated['city'];
        $userAddress->province = $validated['province'];
        $userAddress->country = $validated['country'];
        if ($userAddress->save()) {
            session()->flash('user.success', "Edited a address successfully!");
        } else {
            session()->flash('user.error', "Edited a address failed!");
        }

        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $userAddress = UserAddress::find($id);
        if ($userAddress->is_primary === 1) {
            session()->flash('user.error', 'Sorry, the default address cannot be deleted!');
        } else {
            if ($userAddress->delete()) {
                session()->flash('user.success', 'Deleted address successfully!');
            }
        }
        return redirect('/user/profile');
    }
}
