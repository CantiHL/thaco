<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainValueController extends Controller
{
    public function index()
    {
        return view("admin.mainvalues.mainvalue");
    }
}
