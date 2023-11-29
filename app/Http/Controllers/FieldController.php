<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index()
    {
        return view("admin.fields.field");
    }
}
