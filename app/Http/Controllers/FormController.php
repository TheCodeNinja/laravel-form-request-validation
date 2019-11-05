<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index() {
        return view('form');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'email' => 'required|max:50',
            'password' => 'required|min:6',
        ]);
    }
}
