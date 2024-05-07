<?php

// app/Http/Controllers/TourismController.php

namespace App\Http\Controllers;
use App\Models\Blog;

class TourismController extends Controller
{
    public function showRegion($region)
    {
        // 해당 지역에 맞는 블로그 데이터를 가져옵니다.
        $blogs = Blog::where('local', $region)->get();

        // local.blade.php 뷰에 블로그 데이터와 지역 정보를 전달합니다.
        return view('local', compact('blogs', 'region'));
    }

    public function index()
    {
        // 메인 화면에 보여줄 블로그 목록을 가져옵니다.
        $blogs = Blog::all();

        // 메인 화면을 위한 뷰를 반환합니다.
        return view('index', compact('blogs'));
    }
}
