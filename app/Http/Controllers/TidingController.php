<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TidingController extends Controller
{
    public function index()
    {
        return view("admin.news.news");
    }
    public function addForm()
    {
        return view("admin.news.add_news");
    }
    public function updateForm($id)
    {
        return view("admin.news.update_news", compact('id'));
    }

}
