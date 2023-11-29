<?php

namespace App\Http\Controllers;

use App\Models\Recruit;
use Illuminate\Http\Request;

class RecruitController extends Controller
{

    public function index()
    {
        return view("admin.recruits.recruit");
    }
}
