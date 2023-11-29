<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicTranditionController extends Controller
{
    public function index()
    {
        return view("admin.music.music");
    }
}
