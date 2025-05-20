<?php

namespace App\Http\Controllers;

use App\Models\User;

class StudentController extends Controller
{
    public function index()
    {
        return view('slist.index');
    }

    public function create()
    {
        return view('slist.create');
    }

    public function store(Request $request)
    {
        $request -> Validate ([

            'fname' => 'required|max:255|string',
            'mname' => 'required|max:255|string',
            'lname' => 'required|max:255|string',
            'age' => 'required|integer',
            'address' => 'required|max:255|string',
            'zip' => 'required|integer',
            
        ]);
        slist:: create ($request -> all());
    }
}

