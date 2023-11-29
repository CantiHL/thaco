<?php

namespace App\Http\Controllers;

use App\Models\ActivationField;
use App\Models\Field;
use Illuminate\Http\Request;

class ActivationFieldController extends Controller
{
    public function index(Request $request)
    {
        return view("admin.fields.activation_field");
    }
    public function update($id)
    {
        return view("admin.fields.activation_field_update", compact('id'));
    }
}
