<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site1Controller extends Controller
{
    public function index($name = null){

        $users = [
            [
                'id' => 1,
                'name' => 'Mohammed',
                'age' => 19
            ],
            [
                'id' => 2,
                'name' => 'Ali',
                'age' => 20
            ],
            [
                'id' => 3,
                'name' => 'Fisal',
                'age' => 21
            ]
        ];

        $age = 20;
        return view('php.test' , [
            'name' => $name,
            'age' => $age,
            'users' => $users
        ]);
        // compact($name);
    }
}
