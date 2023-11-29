<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use Illuminate\Http\Request;

class LetterController extends Controller
{
    public function sendInfo(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "email" => 'required|email',
            "address" => 'required',
            "phone" => 'required',
            "content" => 'required',
        ]);
        Letter::create([
            "name" => $request->name,
            "email" => $request->email,
            "address" => $request->address,
            "phone" => $request->phone,
            "content" => $request->content,
        ]);
        return back()->with('message', 'Thành công');
    }
}
