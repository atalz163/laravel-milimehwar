<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactUsController extends Controller
{
<<<<<<< HEAD

    public function index(){
        $contacts = ContactUs::orderBy('created_at','desc')
        ->where('approved',true)
        ->paginate(8);

        
        return view('contact-us.index',compact('contacts'));
    }
=======
>>>>>>> 95e07e254b31dfab86d2972893ed7f40597b2c18
    public function store(Request $request){
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        Session::flash('success', __('contactus.contact_success'));

        ContactUs::create($validatedData);
        return redirect()->route('contact.create');
    }

    public function create(){
<<<<<<< HEAD
        return view('contact-us.contactus');
=======
        return view('contactus');
>>>>>>> 95e07e254b31dfab86d2972893ed7f40597b2c18
    }
}
