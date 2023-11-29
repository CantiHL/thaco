<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Tiding;
use Storage;

class ShareholderController extends Controller
{
    public $data;
    public $news;
    public $title = '';
    public $site_name = '';
    public $content = '';
    public $description = '';
    public $site_image = '';
    public $site_url = '';
    public function __construct()
    {
        $this->data = Member::where('name', 'THACO - CÔNG TY CỔ PHẦN TẬP ĐOÀN TRƯỜNG HẢI')->first();
        $this->news = Tiding::limit(3)->orderBy('id', 'desc')->get();
        if ($this->data) {
            $this->title = $this->data->name;
            $this->site_name = $this->data->name;
            $this->content = $this->data->description;
            $this->description = $this->data->description;
            $this->site_image = Storage::url($this->data->image);
            $this->site_url = route('home');
        }
    }
    public function disclosure()
    {
        return view('client.shareholder.disclosure', [
            'data' => $this->data,
            'title' => $this->title,
            'site_name' => $this->site_name,
            'content' => $this->content,
            'description' => $this->description,
            'site_image' => $this->site_image,
            'site_url' => $this->site_url,
            'news' => $this->news,
        ]);
    }
    public function regulation()
    {
        return view('client.shareholder.regulation', [
            'data' => $this->data,
            'title' => $this->title,
            'site_name' => $this->site_name,
            'content' => $this->content,
            'description' => $this->description,
            'site_image' => $this->site_image,
            'site_url' => $this->site_url,
            'news' => $this->news,

        ]);
    }
    public function shareholderInfo()
    {
        return view('client.shareholder.shareholder-info', [
            'data' => $this->data,
            'title' => $this->title,
            'site_name' => $this->site_name,
            'content' => $this->content,
            'description' => $this->description,
            'site_image' => $this->site_image,
            'site_url' => $this->site_url,
            'news' => $this->news,

        ]);
    }
    public function annualReport()
    {
        return view('client.shareholder.annual-report', [
            'data' => $this->data,
            'title' => $this->title,
            'site_name' => $this->site_name,
            'content' => $this->content,
            'description' => $this->description,
            'site_image' => $this->site_image,
            'site_url' => $this->site_url,
            'news' => $this->news,

        ]);
    }
    public function financial()
    {
        return view('client.shareholder.financial', [
            'data' => $this->data,
            'title' => $this->title,
            'site_name' => $this->site_name,
            'content' => $this->content,
            'description' => $this->description,
            'site_image' => $this->site_image,
            'site_url' => $this->site_url,
            'news' => $this->news,

        ]);
    }

}
