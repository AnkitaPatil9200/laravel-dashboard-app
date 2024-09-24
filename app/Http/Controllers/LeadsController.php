<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadsController extends Controller
{
    public function index(Request $request) {
        return view('leads.view');
    }
}
