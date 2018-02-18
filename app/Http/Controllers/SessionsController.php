<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', [
        'only' => ['create']
      ]);
    }
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email'=>'required|email|max:255',
            'password'=>'required',
        ]);
        if (Auth::attempt($credentials, $request->has('remember'))) {
            $name=Auth::user()->name;
            session()->flash('success', '歡迎，使用者'.$name.'回來');
            return redirect()->intended(route('users.show', [Auth::user()]));
        } else {
            session()->flash('danger', '很抱歉，您的電子郵件或密碼錯誤');
            return redirect()->back();
        }
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已成功登出！');
        return redirect('login');
    }
}
