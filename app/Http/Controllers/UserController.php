<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('reg');
    }

    public function register(RegisterRequest $request)
    {
        $avatar = "public/avatars/".Storage::disk('avatars')->put('/', $request->file('avatar'));

        User::create([
            'fullname' => $request->fullname,
            'username'=>$request->username,
            'email' => $request->email,
            'avatar' => $avatar,
            'password' => Hash::make($request->password),
        ]);
        Auth::attempt(['username' => $request->username, 'password' => $request->password]);
        return redirect()->route('index')->with('success', 'Регистрация прошла успешно!');
    }

    public function auth(AuthRequest $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect(route('index'));
        }
        return back()->withErrors([
            'login'=>'User not found',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('index');
    }

    

}
