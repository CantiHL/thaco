<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ActivationField;
use App\Models\Tiding;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function car()
    {
        $data = \App\Models\Member::where('members.name', 'thaco auto')
            ->join('fields', 'fields.belong_to', 'members.id')
            ->select('members.name as name', 'members.description as description', 'members.image as member_image', 'fields.image as field_image', 'fields.name as field_name')
            ->first();
        $activate_produce = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'thaco auto')
            ->where('active_in', 'SẢN XUẤT')
            ->get();
        $activate_business = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'thaco auto')
            ->where('active_in', 'KINH DOANH')
            ->get();
        $first_produce = $activate_produce->where('title', 'SẢN XUẤT')->first();
        $first_business = $activate_business->where('title', 'KINH DOANH')->first();
        $produce_diff = $activate_produce->reject(function ($item) use ($first_produce) {
            if (isset($first_produce->title)) {
                return $item->title === $first_produce->title;
            }return;
        });

        $business_diff = $activate_business->reject(function ($item) use ($first_business) {
            if (isset($first_business->title)) {
                return $item->title === $first_business->title;
            }return;
        });
        $news = Tiding::join('fields', 'fields.id', 'tidings.field_id')
            ->where('fields.name', 'LĨNH VỰC Ô TÔ')
            ->select('tidings.id', 'tidings.title', 'tidings.date', 'tidings.content', 'tidings.tag', 'tidings.image')
            ->orderBy('tidings.id', 'desc')
            ->limit(5)
            ->get();
        // dd($news);
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
        }
        return view("client.fields.car", compact(['title', 'content', 'site_name', 'description', 'site_image', 'site_url', 'data', 'first_produce', 'first_business', 'produce_diff', 'business_diff', 'newsListAll', 'data']));
    }
    public function agriculture()
    {
        $data = \App\Models\Member::where('members.name', 'THACO AGRI')
            ->join('fields', 'fields.belong_to', 'members.id')
            ->select('members.name as name', 'members.description as description', 'members.image as member_image', 'fields.image as field_image', 'fields.name as field_name')
            ->first();
        // dd($data);
        $activate_cultivate = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THACO AGRI')
            ->where('active_in', 'TRỒNG TRỌT')
            ->get();
        $activate_cow_farming = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THACO AGRI')
            ->where('active_in', 'CHĂN NUÔI BÒ')
            ->get();
        $activate_pig_farming = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THACO AGRI')
            ->where('active_in', 'CHĂN NUÔI HEO')
            ->get();
        $first_cultivate = $activate_cultivate->where('title', 'TRỒNG TRỌT')->first();
        $first_cow_farming = $activate_cow_farming->where('title', 'CHĂN NUÔI BÒ')->first();
        $first_pig_farming = $activate_pig_farming->where('title', 'CHĂN NUÔI HEO')->first();
        $cultivate_diff = $activate_cultivate->reject(function ($item) use ($first_cultivate) {
            if (isset($first_cultivate->title)) {
                return $item->title === $first_cultivate->title;
            }return;
        });

        $cow_farming_diff = $activate_cow_farming->reject(function ($item) use ($first_cow_farming) {
            if (isset($first_cow_farming->title)) {
                return $item->title === $first_cow_farming->title;
            }return;
        });
        $pig_farming_diff = $activate_pig_farming->reject(function ($item) use ($first_pig_farming) {
            if (isset($first_pig_farming->title)) {
                return $item->title === $first_pig_farming->title;
            }return;
        });
        $news = Tiding::join('fields', 'fields.id', 'tidings.field_id')
            ->where('fields.name', 'LĨNH VỰC NÔNG NGHIỆP')
            ->select('tidings.id', 'tidings.title', 'tidings.date', 'tidings.content', 'tidings.tag', 'tidings.image')
            ->orderBy('tidings.id', 'desc')
            ->limit(5)
            ->get();
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
        }
        return view("client.fields.agriculture", compact(['title', 'content', 'site_name', 'description', 'site_image', 'site_url', 'data', 'first_cultivate', 'first_cow_farming', 'first_pig_farming', 'cultivate_diff', 'cow_farming_diff', 'pig_farming_diff', 'newsListAll', 'data']));
    }
    public function industries()
    {
        $data = \App\Models\Member::where('members.name', 'THACO INDUSTRIES')
            ->join('fields', 'fields.belong_to', 'members.id')
            ->select('members.name as name', 'members.description as description', 'members.image as member_image', 'fields.image as field_image', 'fields.name as field_name')
            ->first();
        // dd($data);
        $somiroc = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THACO INDUSTRIES')
            ->where('active_in', 'SƠ MI RƠ MOÓC')
            ->get();
        $giacongcokhi = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THACO INDUSTRIES')
            ->where('active_in', 'GIA CÔNG CƠ KHÍ & SẢN PHẨM PHỤ TRỢ')
            ->get();
        $cungcapthep = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THACO INDUSTRIES')
            ->where('active_in', 'CUNG CẤP PHÔI THÉP VÀ VẬT TƯ NGUYÊN VẬT LIỆU')
            ->get();
        $linhkiencn = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THACO INDUSTRIES')
            ->where('active_in', 'LINH KIỆN CÔNG NGHIỆP VÀ DÂN DỤNG')
            ->get();
        $tbnongnghiep = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THACO INDUSTRIES')
            ->where('active_in', 'THIẾT BỊ NÔNG NGHIỆP,CÔNG NGHIỆP, XÂY DỰNG')
            ->get();
        $linhkienoto = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THACO INDUSTRIES')
            ->where('active_in', 'LINH KIỆN PHỤ TÙNG Ô TÔ, XE MÁY')
            ->get();
        $dvthietke = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THACO INDUSTRIES')
            ->where('active_in', 'DỊCH VỤ THIẾT KẾ VÀ PHÁT TRIỂN SẢN PHẨM')
            ->get();
        $first_somiroc = $somiroc->where('title', 'SƠ MI RƠ MOÓC')->first();
        $first_giacongcokhi = $giacongcokhi->where('title', 'GIA CÔNG CƠ KHÍ & SẢN PHẨM PHỤ TRỢ')->first();
        $first_cungcapthep = $cungcapthep->where('title', 'CUNG CẤP PHÔI THÉP VÀ VẬT TƯ NGUYÊN VẬT LIỆU')->first();
        $first_linhkiencn = $linhkiencn->where('title', 'LINH KIỆN CÔNG NGHIỆP VÀ DÂN DỤNG')->first();
        $first_tbnongnghiep = $tbnongnghiep->where('title', 'THIẾT BỊ NÔNG NGHIỆP, CÔNG NGHIỆP, XÂY DỰNG')->first();
        $first_linhkienoto = $linhkienoto->where('title', 'LINH KIỆN PHỤ TÙNG Ô TÔ, XE MÁY')->first();
        $first_dvthietke = $dvthietke->where('title', 'DỊCH VỤ THIẾT KẾ VÀ PHÁT TRIỂN SẢN PHẨM')->first();

        $somiroc_diff = $somiroc->reject(function ($item) use ($first_somiroc) {
            if (isset($first_somiroc->title)) {
                return $item->title === $first_somiroc->title;
            }return;
        });

        $giacongcokhi_diff = $giacongcokhi->reject(function ($item) use ($first_giacongcokhi) {
            if (isset($first_giacongcokhi->title)) {
                return $item->title === $first_giacongcokhi->title;
            }return;
        });
        $cuncapthep_diff = $cungcapthep->reject(function ($item) use ($first_cungcapthep) {
            if (isset($first_cungcapthep->title)) {
                return $item->title === $first_cungcapthep->title;
            }return;
        });
        $linhkiencn_diff = $linhkiencn->reject(function ($item) use ($first_linhkiencn) {
            if (isset($first_linhkiencn->title)) {
                return $item->title === $first_linhkiencn->title;
            }return;
        });
        $tbnongnghiep_diff = $tbnongnghiep->reject(function ($item) use ($first_tbnongnghiep) {
            if (isset($first_tbnongnghiep->title)) {
                return $item->title === $first_tbnongnghiep->title;
            }return;
        });
        $linhkienoto_diff = $linhkienoto->reject(function ($item) use ($first_linhkienoto) {
            if (isset($first_linhkienoto->title)) {
                return $item->title === $first_linhkienoto->title;
            }return;
        });
        $dvthietke_diff = $dvthietke->reject(function ($item) use ($first_dvthietke) {
            if (isset($first_dvthietke->title)) {
                return $item->title === $first_dvthietke->title;
            }return;
        });
        $news = Tiding::join('fields', 'fields.id', 'tidings.field_id')
            ->where('fields.name', 'LĨNH VỰC CƠ KHÍ & CÔNG NGHIỆP HỖ TRỢ')
            ->select('tidings.id', 'tidings.title', 'tidings.date', 'tidings.content', 'tidings.tag', 'tidings.image')
            ->orderBy('tidings.id', 'desc')
            ->limit(5)
            ->get();
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
        }
        return view("client.fields.industries", compact(['title', 'content', 'site_name', 'description', 'site_image', 'site_url', 'data', 'first_somiroc', 'first_giacongcokhi', 'first_cungcapthep', 'somiroc_diff', 'giacongcokhi_diff', 'cuncapthep_diff', 'newsListAll', 'data', 'first_linhkiencn', 'first_tbnongnghiep', 'first_linhkienoto', 'first_dvthietke', 'linhkiencn_diff', 'tbnongnghiep_diff', 'linhkienoto_diff', 'dvthietke_diff']));
    }
    public function construction()
    {
        $data = \App\Models\Member::where('members.name', 'THADICO')
            ->join('fields', 'fields.belong_to', 'members.id')
            ->select('members.name as name', 'members.description as description', 'members.image as member_image', 'fields.image as field_image', 'fields.name as field_name')
            ->first();
        // dd($data);
        $giaothong = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THADICO')
            ->where('active_in', 'GIAO THÔNG - HẠ TẦNG KỸ THUẬT')
            ->get();
        $khucn = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THADICO')
            ->where('active_in', 'KHU CÔNG NGHIỆP')
            ->get();
        $batdongsan = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THADICO')
            ->where('active_in', 'BẤT ĐỘNG SẢN')
            ->get();
        $khudothi = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THADICO')
            ->where('active_in', 'KHU ĐÔ THỊ')
            ->get();
        $first_giaothong = $giaothong->where('title', 'GIAO THÔNG - HẠ TẦNG KỸ THUẬT')->first();
        $first_khucn = $khucn->where('title', 'KHU CÔNG NGHIỆP')->first();
        $first_batdongsan = $batdongsan->where('title', 'BẤT ĐỘNG SẢN')->first();
        $first_khudothi = $khudothi->where('title', 'KHU ĐÔ THỊ')->first();
        $giaothong_diff = $giaothong->reject(function ($item) use ($first_giaothong) {
            if (isset($first_giaothong->title)) {
                return $item->title === $first_giaothong->title;
            }return;
            // return $item->title === $first_giaothong->title;
        });

        $khucn_diff = $khucn->reject(function ($item) use ($first_khucn) {
            if (isset($first_khucn->title)) {
                return $item->title === $first_khucn->title;
            }return;
        });
        $batdongsan_diff = $batdongsan->reject(function ($item) use ($first_batdongsan) {
            if (isset($first_batdongsan->title)) {
                return $item->title === $first_batdongsan->title;
            }return;
        });
        $khudothi_diff = $khudothi->reject(function ($item) use ($first_khudothi) {
            if (isset($first_khudothi->title)) {
                return $item->title === $first_khudothi->title;
            }return;
        });
        $news = Tiding::join('fields', 'fields.id', 'tidings.field_id')
            ->where('fields.name', 'LĨNH VỰC ĐẦU TƯ - XÂY DỰNG')
            ->select('tidings.id', 'tidings.title', 'tidings.date', 'tidings.content', 'tidings.tag', 'tidings.image')
            ->orderBy('tidings.id', 'desc')
            ->limit(5)
            ->get();
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
        }
        return view("client.fields.construction", compact(['title', 'content', 'site_name', 'description', 'site_image', 'site_url', 'data', 'first_giaothong', 'first_khudothi', 'first_khucn', 'first_batdongsan', 'giaothong_diff', 'khucn_diff', 'batdongsan_diff', 'khudothi_diff', 'newsListAll', 'data']));
    }
    public function logistics()
    {
        $data = \App\Models\Member::where('members.name', 'THILOGI')
            ->join('fields', 'fields.belong_to', 'members.id')
            ->select('members.name as name', 'members.description as description', 'members.image as member_image', 'fields.image as field_image', 'fields.name as field_name')
            ->first();
        // dd($data);
        $giaothong = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THILOGI')
            ->where('active_in', 'VẬN TẢI ĐƯỜNG BỘ')
            ->get();
        $khucn = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THILOGI')
            ->where('active_in', 'DỊCH VỤ CẢNG CHU LAI')
            ->get();
        $batdongsan = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THILOGI')
            ->where('active_in', 'VẬN TẢI BIỂN')
            ->get();
        $khudothi = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THILOGI')
            ->where('active_in', 'DỊCH VỤ ĐÓNG GÓI VÀ THÁO KIỆN, KIỂM HÀNG')
            ->get();
        $first_giaothong = $giaothong->where('title', 'VẬN TẢI ĐƯỜNG BỘ')->first();
        $first_khucn = $khucn->where('title', 'DỊCH VỤ CẢNG CHU LAI')->first();
        $first_batdongsan = $batdongsan->where('title', 'VẬN TẢI BIỂN')->first();
        $first_khudothi = $khudothi->where('title', 'DỊCH VỤ ĐÓNG GÓI VÀ THÁO KIỆN, KIỂM HÀNG')->first();
        $giaothong_diff = $giaothong->reject(function ($item) use ($first_giaothong) {
            return $item->title === $first_giaothong->title;
        });

        $khucn_diff = $khucn->reject(function ($item) use ($first_khucn) {
            if (isset($first_khucn->title)) {
                return $item->title === $first_khucn->title;
            }return;
        });
        $batdongsan_diff = $batdongsan->reject(function ($item) use ($first_batdongsan) {
            if (isset($first_batdongsan->title)) {
                return $item->title === $first_batdongsan->title;
            }return;
        });
        $khudothi_diff = $khudothi->reject(function ($item) use ($first_khudothi) {
            if (isset($first_khudothi->title)) {
                return $item->title === $first_khudothi->title;
            }return;
        });
        $news = Tiding::join('fields', 'fields.id', 'tidings.field_id')
            ->where('fields.name', 'LĨNH VỰC LOGISTICS')
            ->select('tidings.id', 'tidings.title', 'tidings.date', 'tidings.content', 'tidings.tag', 'tidings.image')
            ->orderBy('tidings.id', 'desc')
            ->limit(5)
            ->get();
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
        }
        return view("client.fields.logistics", compact(['title', 'content', 'site_name', 'description', 'site_image', 'site_url', 'data', 'first_giaothong', 'first_khudothi', 'first_khucn', 'first_batdongsan', 'giaothong_diff', 'khucn_diff', 'batdongsan_diff', 'khudothi_diff', 'newsListAll', 'data']));
    }
    public function service()
    {
        $data = \App\Models\Member::where('members.name', 'THISO')
            ->join('fields', 'fields.belong_to', 'members.id')
            ->select('members.name as name', 'members.description as description', 'members.image as member_image', 'fields.image as field_image', 'fields.name as field_name')
            ->first();
        // dd($data);
        $somiroc = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THISO')
            ->where('active_in', 'TRUNG TÂM THƯƠNG MẠI')
            ->get();
        $giacongcokhi = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THISO')
            ->where('active_in', 'DỊCH VỤ NHÀ HÀNG ĂN UỐNG')
            ->get();
        $cungcapthep = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THISO')
            ->where('active_in', 'TRUNG TÂM HỘI NGHỊ TIỆC CƯỚI')
            ->get();
        $linhkiencn = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THISO')
            ->where('active_in', 'KHU VUI CHƠI GIẢI TRÍ TRONG NHÀ')
            ->get();
        $tbnongnghiep = ActivationField::join('fields', 'fields.id', 'activation_fields.field_id')
            ->join('members', 'fields.belong_to', 'members.id')
            ->select('activation_fields.title', 'activation_fields.description', 'activation_fields.image')
            ->where('members.name', 'THISO')
            ->where('active_in', 'KHU MUA SẮM CAO CẤP')
            ->get();

        $first_somiroc = $somiroc->where('title', 'TRUNG TÂM THƯƠNG MẠI')->first();
        $first_giacongcokhi = $giacongcokhi->where('title', 'DỊCH VỤ NHÀ HÀNG ĂN UỐNG')->first();
        $first_cungcapthep = $cungcapthep->where('title', 'TRUNG TÂM HỘI NGHỊ TIỆC CƯỚI')->first();
        $first_linhkiencn = $linhkiencn->where('title', 'KHU VUI CHƠI GIẢI TRÍ TRONG NHÀ')->first();
        $first_tbnongnghiep = $tbnongnghiep->where('title', 'KHU MUA SẮM CAO CẤP')->first();

        $somiroc_diff = $somiroc->reject(function ($item) use ($first_somiroc) {
            if (isset($first_somiroc->title)) {
                return $item->title === $first_somiroc->title;
            }return;
        });

        $giacongcokhi_diff = $giacongcokhi->reject(function ($item) use ($first_giacongcokhi) {
            if (isset($first_giacongcokhi->title)) {
                return $item->title === $first_giacongcokhi->title;
            }return;
        });
        $cuncapthep_diff = $cungcapthep->reject(function ($item) use ($first_cungcapthep) {
            if (isset($first_cungcapthep->title)) {
                return $item->title === $first_cungcapthep->title;
            }return;
        });
        $linhkiencn_diff = $linhkiencn->reject(function ($item) use ($first_linhkiencn) {
            if (isset($first_linhkiencn->title)) {
                return $item->title === $first_linhkiencn->title;
            }return;
        });
        $tbnongnghiep_diff = $tbnongnghiep->reject(function ($item) use ($first_tbnongnghiep) {
            if (isset($first_tbnongnghiep->title)) {
                return $item->title === $first_tbnongnghiep->title;
            }return;
        });

        $news = Tiding::join('fields', 'fields.id', 'tidings.field_id')
            ->where('fields.name', 'LĨNH VỰC THƯƠNG MẠI - DỊCH VỤ')
            ->select('tidings.id', 'tidings.title', 'tidings.date', 'tidings.content', 'tidings.tag', 'tidings.image')
            ->orderBy('tidings.id', 'desc')
            ->limit(5)
            ->get();
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
        }
        return view("client.fields.service", compact(['title', 'content', 'site_name', 'description', 'site_image', 'site_url', 'data', 'first_somiroc', 'first_giacongcokhi', 'first_cungcapthep', 'somiroc_diff', 'giacongcokhi_diff', 'cuncapthep_diff', 'newsListAll', 'data', 'first_linhkiencn', 'first_tbnongnghiep', 'linhkiencn_diff', 'tbnongnghiep_diff']));
    }
}
