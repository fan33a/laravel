<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Form3Request;

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
}
