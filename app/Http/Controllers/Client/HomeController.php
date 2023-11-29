<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\DevelopmentProcess;
use App\Models\Field;
use App\Models\Imprint;
use App\Models\Leader;
use App\Models\MainValue;
use App\Models\Member;
use App\Models\MusicTrandition;
use App\Models\Recruit;
use App\Models\Tiding;
use Illuminate\Http\Request;
use Storage;

class HomeController extends Controller
{
    public function index()
    {
        $data = Member::where('name', 'THACO - CÔNG TY CỔ PHẦN TẬP ĐOÀN TRƯỜNG HẢI')->first();
        $title = '';
        $site_name = '';
        $content = '';
        $description = '';
        $site_image = '';
        $site_url = '';
        if ($data) {
            $title = $data->name;
            $site_name = $data->name;
            $content = $data->description;
            $description = $data->description;
            $site_image = Storage::url($data->image);
            $site_url = route('home');
        }

        $recruits = Recruit::select('name', 'link_job')->get();
        $members = Member::select('image')->get();
        $news = Tiding::latest()->limit(4)->get();
        $newsListAll = collect($news)->map(function ($post) {
            $post->tag = json_decode($post->tag);
            $content = $post->content;
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->loadHTML('<?xml encoding="UTF-8">' . $content);
            libxml_use_internal_errors(false);
            $firstParagraph = $dom->getElementsByTagName('p')->item(0);
            if ($firstParagraph) {
                $firstParagraphContent = $dom->saveHTML($firstParagraph);
                $plainText = strip_tags($firstParagraphContent);
                $post->content = $plainText;
            }
            return $post;
        });
        $lastest = $newsListAll->take(1);
        $newsList = $newsListAll->diff($lastest);
        $fieldAll = Field::latest()->get();
        $fieldAll = collect($fieldAll)->map(function ($item) {
            $item->link_route = 'home';
            if ($item->name == 'LĨNH VỰC Ô TÔ') {
                $item->link_route = 'car';
            }
            if ($item->name == 'LĨNH VỰC NÔNG NGHIỆP') {
                $item->link_route = 'agriculture';
            }
            if ($item->name == 'LĨNH VỰC CƠ KHÍ & CÔNG NGHIỆP HỖ TRỢ') {
                $item->link_route = 'industries';
            }
            if ($item->name == 'LĨNH VỰC ĐẦU TƯ - XÂY DỰNG') {
                $item->link_route = 'construction';
            }
            if ($item->name == 'LĨNH VỰC LOGISTICS') {
                $item->link_route = 'logistics';
            }
            if ($item->name == 'LĨNH VỰC THƯƠNG MẠI - DỊCH VỤ') {
                $item->link_route = 'service';
            }
            $item->detail = json_decode($item->detail);
            return $item;
        });
        $fieldLimit2 = $fieldAll->take(2);
        $fieldDiff = $fieldAll->diff($fieldLimit2);

        $members = Member::all();
        return view("client.home", compact(['title', 'site_image', 'site_url', 'content', 'site_name', 'description', 'recruits', 'members', 'lastest', 'newsList', 'newsListAll', 'fieldLimit2', 'fieldDiff', 'members']));
    }
    public function contact()
    {
        $data = Member::where('name', 'THACO - CÔNG TY CỔ PHẦN TẬP ĐOÀN TRƯỜNG HẢI')->first();
        $title = 'Liên hệ';
        $site_name = '';
        $content = '';
        $description = '';
        $site_image = '';
        $site_url = '';
        if ($data) {
            $site_name = $data->name;
            $content = $data->description;
            $description = $data->description;
            $site_image = Storage::url($data->image);
            $site_url = route('about');
        }
        return view("client.contact", compact(['title', 'site_image', 'site_url', 'content', 'site_name', 'site_image', 'description']));
    }
    public function about()
    {
        $data = Member::where('name', 'THACO - CÔNG TY CỔ PHẦN TẬP ĐOÀN TRƯỜNG HẢI')->first();
        $title = '';
        $site_name = '';
        $content = '';
        $description = '';
        $site_image = '';
        $site_url = '';
        if ($data) {
            $title = $data->name;
            $site_name = $data->name;
            $content = $data->description;
            $description = $data->description;
            $site_image = Storage::url($data->image);
            $site_url = route('about');
        }
        $fieldAll = Field::latest()->get();
        $fieldAll = collect($fieldAll)->map(function ($item) {
            $item->link_route = 'home';
            if ($item->name == 'LĨNH VỰC Ô TÔ') {
                $item->link_route = 'car';
            }
            if ($item->name == 'LĨNH VỰC NÔNG NGHIỆP') {
                $item->link_route = 'agriculture';
            }
            if ($item->name == 'LĨNH VỰC CƠ KHÍ & CÔNG NGHIỆP HỖ TRỢ') {
                $item->link_route = 'industries';
            }
            if ($item->name == 'LĨNH VỰC ĐẦU TƯ - XÂY DỰNG') {
                $item->link_route = 'construction';
            }
            if ($item->name == 'LĨNH VỰC LOGISTICS') {
                $item->link_route = 'logistics';
            }
            if ($item->name == 'LĨNH VỰC THƯƠNG MẠI - DỊCH VỤ') {
                $item->link_route = 'service';
            }
            $item->detail = json_decode($item->detail);
            return $item;
        });
        $fieldLimit2 = $fieldAll->take(2);
        $fieldDiff = $fieldAll->diff($fieldLimit2);
        $leaders = Leader::where('level', 1)->get();
        $leadersControl = Leader::where('level', 2)->get();
        $companyAchievement = Achievement::where('whose', 1)->get();
        $leaderAchievement = Achievement::where('whose', 2)->get();
        $developmentProcess = DevelopmentProcess::all();
        return view("client.about", compact(['title', 'site_image', 'site_url', 'content', 'site_name', 'description', 'fieldLimit2', 'fieldDiff', 'leaders', 'leadersControl', 'companyAchievement', 'leaderAchievement', 'developmentProcess']));
    }
    public function trandition()
    {
        $data = Member::where('name', 'THACO - CÔNG TY CỔ PHẦN TẬP ĐOÀN TRƯỜNG HẢI')->first();
        $title = '';
        $site_name = '';
        $content = '';
        $description = '';
        $site_image = '';
        $site_url = '';
        if ($data) {
            $title = $data->name;
            $site_name = $data->name;
            $content = $data->description;
            $description = $data->description;
            $site_image = Storage::url($data->image);
            $site_url = route('trandition');
        }
        $imprint = Imprint::all();
        $mainvalue = MainValue::all();
        $music = MusicTrandition::all();
        $music = $music->map(function ($item) {
            $item->mp4_name = '';
            $url = $item->mp4;
            $pattern = '/(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?v=([a-zA-Z0-9_-]{11})/';
            preg_match($pattern, $url, $matches);
            if (count($matches) > 1) {
                $videoId = $matches[1];
                // Now $videoId contains the extracted YouTube video ID
                $item->mp4_name = $videoId;
            }
            return $item;
        });
        return view("client.trandition", compact(['title', 'site_image', 'site_url', 'content', 'site_name', 'description', 'mainvalue', 'imprint', 'music']));
    }
}
