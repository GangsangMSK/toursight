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
}
