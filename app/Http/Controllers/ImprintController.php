<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImprintController extends Controller
{
    public function imprint()
    {
        return view("admin.imprints.imprint");
    }
}
