<?php

namespace App\Http\Controllers;

class LeaderController extends Controller
{
    public function index()
    {
        return view("admin.leaders.leader");
    }
}
