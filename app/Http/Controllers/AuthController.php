<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // 유효성 검사
        $request->validate([
            'id' => 'required|unique:user',
            'password' => 'required',
            'nickname' => 'required'
        ]);

        // 새로운 User 인스턴스 생성
        $user = new User;
        $user->id = $request->id;
        $user->password = bcrypt($request->password);
        $user->nickname = $request->nickname;

        // 데이터베이스에 저장
        $user->save();

        // 등록 후 리디렉션
        return redirect()->back()->with('success', 'Registration successful.');
    }


    public function login(Request $request)
    {
        $credentials = $request->only('id', 'password');

        if (Auth::attempt($credentials)) {
            // 로그인 성공 시 세션에 사용자 정보 저장
            session()->put('user', Auth::user());
            return redirect()->intended('/');
        }

        return redirect()->back()->with('error', 'Login failed. Please check your credentials.');
    }


    public function logout(Request $request)
    {
        // 세션에서 사용자 정보 제거
        session()->forget('user');
        Auth::logout();
        return redirect()->route('home');
    }

}
