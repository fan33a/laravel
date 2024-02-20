<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Mail\ContactMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\Form3Request;
use Illuminate\Support\Facades\Mail;

class FormsController extends Controller
{
    function form1() {
        return view('forms.form1');
    }

    function form1_data(Request $requset) {
        // dd($requset->all());
        // dd($requset->except('_token'));
        // dd($requset->only('name','age'));

        // $name = $requset->input('name');
        // $age = $requset->input('age');
        // $check = $requset->input('check', 0); // input('input_name', defulte value)

        $name = $requset->name;
        $name = $requset->age;
        
        return "I'm $name I'm $age / $check";
    }


    function form2() {
        return view('forms.form2');
    }

    function form2_data(Request $requset) {
        // dd($requset->all());
        $name = $requset->file('image')->getClientOriginalName(); // return The Original Name of file
        $requset->file('image')->move(public_path('uploads') , $name);
    }


    function form3() {
        return view('forms.form3');
    }

    // function form3_data(Request $requset) {
    function form3_data(Form3Request $requset) {
        // $requset->validate([
        //     'name' => 'required|min:3|max:30',
        //     'email' => 'required|ends_with:@gmail.com',
        //     'password' => 'required|confirmed',
        //     'description' => 'max:300'
        // ]);

        // dd($requset->all());
        
        /** Validation Types:
         * 1. Reuest Validate
         * 2. Validator Class
         * 3. File Request
         */
    }

    function form4() {
        return view('forms.form4');
    }

    function form4_data(Request $requset) {
        // dd($requset->all());

        $requset->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'start_date' => 'required',
            'end_date' => 'required|after:start_date',
            'cv' => 'required|file|extensions:pdf,docx,doc'
        ]);

        // $requset->file('cv')->store('public/uploads');

        // $file_name = strtolower($requset->name);
        // $file_name = str_replace(' ', '-', $requset->name);
        $ex = $requset->file('cv')->getClientOriginalExtension(); //get file extension
        $file_name = Str::slug($requset->name); // replace spaces in the name to (-)
        $file_name = $file_name . '-' . $requset->start_date . '-' . time() . '.' . $ex;

        //$path = $requset->file('cv')->store('uploads', 'custom'); // Recomended
        $path = $requset->file('cv')->storeAs('uploads', $file_name , 'custom'); // Recomended
        dd($file_name);
    }


    function contact() {
        return view('forms.contact');
    }

    function contact_data(Request $request) {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = $request->except('_token');

        $data['image'] = $request->file('image')->store('uploads', 'custom');

        Mail::to('fan33a@gmail.com')->send(new ContactMail($data)); // Pass the data to mail class

        
    }
}
