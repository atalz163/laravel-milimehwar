<?php

namespace App\Http\Controllers;

use App\Models\OnlineRegisteration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OnlineRegisterationController extends Controller
{
    public function create()
    {
        return view('onlineRegister');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'grand_father_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'marital_status' => 'nullable|in:single,married',
            'blood_group' => 'nullable|string|max:20',
            'friend_number' => 'nullable|string|max:20',
            'mobile' => 'required|string|max:20', // Assuming 'mobile' corresponds to 'contact_number' from the migration
            'email' => 'nullable|email|max:255',
            'province' => 'required|string|max:20',
            'village' => 'required|string|max:20',
            'district' => 'required|string|max:20',
            'current_address' => 'nullable|string|max:255', // Assuming 'current_address' is missing from the migration
            'current_job' => 'nullable|string|max:20',
            'languages' => 'nullable|string',
            'mother_tounge' => 'required|string|max:100',
            'education_level' => 'required|string|max:200',
            'talent' => 'nullable|string|max:500',
            'approved' => 'boolean' // Assuming 'approved' is a checkbox input
        ]);
        Session::flash('success', __('onlineForm.OnlineFormSuccess'));
        // Create a new instance of the OnlineRegisteration model with the validated data
        $onlineRegistration = OnlineRegisteration::create($validatedData);
    
        // Optionally, you can return a response indicating success
        return redirect()->route('onlineRegister.create');
    }
}
