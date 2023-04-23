<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;

class ConferenceController extends Controller
{
    function show()
    {
        $data = conference::all();
        return view('conferences', ['conferences' => $data]);
    }

    function delete($id)
    {
        $data = Conference::find($id);
        $data->delete();
        return redirect('conferences');
    }

    function showData($id)
    {
        $data = Conference::find($id);
        return view('edit', ['data' => $data]);
    }

    function update(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'date' => 'required'
        ]);

        $data = Conference::find($req->id);
        $data->name = $req->name;
        $data->description = $req->description;
        $data->address = $req->address;
        $data->date = $req->date;
        $data->save();
        return redirect('conferences');
    }

    function addData(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'date' => 'required'
        ]);

        $conference = new Conference;
        $conference->name = $req->name;
        $conference->description = $req->description;
        $conference->address = $req->address;
        $conference->date = $req->date;
        $conference->save();
        return redirect('conferences');
    }
}
