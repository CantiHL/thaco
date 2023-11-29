<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Tiding;
use Illuminate\Http\Request;

class CommunicationController extends Controller
{
    public function news()
    {
        $title = 'Tin tức';
        $site_name = '';
        $content = '';
        $description = '';
        $site_image = '';
        $site_url = route('newss');
        return view("client.news.newss", compact(['title', 'site_image', 'site_url', 'content', 'site_name', 'description']));
    }
    public function magazin()
    {
        $title = 'Tạp chí';
        $site_name = '';
        $content = '';
        $description = '';
        $site_image = '';
        $site_url = route('magazin');
        return view("client.communication.magazin", compact(['title', 'site_image', 'site_url', 'content', 'site_name', 'description']));
    }
    public function pressRelease()
    {
        $title = 'Thông cáo báo trí';
        $site_name = '';
        $content = '';
        $description = '';
        $site_image = '';
        $site_url = route('pressRelease');
        return view("client.communication.press-release", compact(['title', 'site_image', 'site_url', 'content', 'site_name', 'description']));
    }
    public function event()
    {
        $title = 'Sự kiện';
        $site_name = '';
        $content = '';
        $description = '';
        $site_image = '';
        $site_url = route('pressRelease');
        return view("client.communication.event", compact(['title', 'site_image', 'site_url', 'content', 'site_name', 'description']));
    }
    public function internalActivities()
    {
        $title = 'Hoạt động nội bộ';
        $site_name = '';
        $content = '';
        $description = '';
        $site_image = '';
        $site_url = route('internalActivities');
        return view("client.communication.internal-activities", compact(['title', 'site_image', 'site_url', 'content', 'site_name', 'description']));
    }
    public function presidentMessage()
    {
        $title = 'Thông điệp chủ tịch';
        $site_name = '';
        $content = '';
        $description = '';
        $site_image = '';
        $site_url = route('presidentMessage');
        return view("client.communication.president-message", compact(['title', 'site_image', 'site_url', 'content', 'site_name', 'description']));
    }
    public function happyNewYearLetter()
    {
        $title = 'Thư chúc tết của chủ tịch HDQT';
        $site_name = '';
        $content = '';
        $description = '';
        $site_image = '';
        $site_url = route('happyNewYearLetter');
        return view("client.communication.happy-new-year-letter", compact(['title', 'site_image', 'site_url', 'content', 'site_name', 'description']));
    }
}
