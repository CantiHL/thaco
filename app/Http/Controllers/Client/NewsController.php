<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Tiding;
use Illuminate\Http\Request;
use Storage;

class NewsController extends Controller
{
    public function news($id)
    {
        $data = Tiding::join('fields', 'fields.id', 'tidings.field_id')
            ->join('members', 'members.id', 'fields.belong_to')
            ->where('tidings.id', $id)
            ->select('tidings.id', 'tidings.title', 'tidings.date', 'tidings.content', 'tidings.tag', 'tidings.image', 'members.name')
            ->first();
        $data->tag = json_decode($data->tag);
        $content = $data->content;
        libxml_use_internal_errors(true);
        $dom = new \DOMDocument('1.0', 'UTF-8');
        $dom->loadHTML('<?xml encoding="UTF-8">' . $content);
        libxml_use_internal_errors(false);
        $firstParagraph = $dom->getElementsByTagName('p')->item(0);
        if ($firstParagraph) {
            $firstParagraphContent = $dom->saveHTML($firstParagraph);
            $plainText = strip_tags($firstParagraphContent);
            $data->short_content = $plainText;
        }
        $tags = $data->tag;
        $data_relate = Tiding::where(function ($query) use ($tags) {
            foreach ($tags as $tag) {
                $query->orWhere('tag', 'like', '%' . $tag . '%');
            }
        })
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();
        $data_relate = collect($data_relate)->map(function ($post) {
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
        $title = '';
        $site_name = 'THACO - CÔNG TY CỔ PHẦN TẬP ĐOÀN TRƯỜNG HẢI';
        $content = '';
        $description = '';
        $site_image = '';
        $site_url = '';
        if ($data) {
            $title = $data->name;
            $site_name = $data->name;
            $content = $data->short_content;
            $description = $data->short_content;
            $site_image = Storage::url($data->image);
            $site_url = route('clientnews', ['id' => $data->id]);
        }
        return view('client.news.news', compact('data', 'title', 'site_name', 'content', 'description', 'site_image', 'site_url', 'data_relate'));
    }
}
