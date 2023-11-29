<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShareHolderController extends Controller
{
    public function index()
    {
        return view("admin.shareholders.shareholder");
    }
}
