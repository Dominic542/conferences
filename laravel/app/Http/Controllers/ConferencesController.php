<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;
use Illuminate\Support\Facades\Auth;

class ConferencesController extends Controller
{
    function show()
    {
        $data = conference::all();
        return view('conferences', ['conferences'=>$data]);
    }

    function conferencePost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required'
        ]);

        $credentials = $request->only('name', "description", "date");
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('conferences'));
        }
        return redirect(route('conferences'))->with("error", "conference details are wrong");
    }

}
