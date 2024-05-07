<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        // $data = User::all();
        // if ($data->count() > 0) {
        //     return view('register', ['data' => $data]);
        // } else {
        //     return view('register');
        // }
        return view('index');
    }

    // public function store(Request $request)
    // {
    //     $user = new User;
    //     $user->nickname = $request->name;
    //     $user->id = $request->id;
    //     $user->password = $request->password;
    //     $user->save();
    //     return redirect('/register');
    // }

    // public function delete($id)
    // {
    //     $user = User::find($id);
    //     $user->delete();
    //     return redirect('/register');
    // }

    public function getBlogsByLocal(Request $request)
    {
        // 화면에서 전달된 지역 정보
        $selectedLocal = $request->input('local');

        // 데이터베이스에서 해당 지역에 대한 블로그 데이터를 가져옴
        $blogs = Blog::where('local', $selectedLocal)->get();

        return view('blogs.index', compact('blogs'));
    }
}
