<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Insurance;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    function one_to_one() {
        // $user = User::find(1);

        // 1 - 1 
        // primary hasOne second
        // second belongTo primary

        // find, findOrFail, first, firstOrFail, get, all, paginate, simplepageinate

        // $in = Insurance::where('user_id' , $user->id)->first();

        // dd($user->insurance->start);

        $in = Insurance::find(1);

        dd($in->user);
    }

    function users() {
        // $users = User::all(); this case it's to load(not fast)
        $users = User::with('insurance')->get(); // in this his get Users & Insurance and send it with compact

        return view('relation.users', compact('users'));
    }
}
