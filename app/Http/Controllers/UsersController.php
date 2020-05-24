<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = _auth::user();
            
            $data = [
                'user' => $user,
            ];
            
            return view('users.index',[
                'users' => $users,
            ]);
        }
        
        return view('welcome', $data);
        
    }
    
    public function show($id)
    {
        $user = \Auth::user();
        
        return view('users.show', [
            'user' => $user,
        ]);
    }
    
    public function edit($id) 
    {
        $user = User::find($id);
        
        return view('users.edit', [
            'user' => $user,
        ]);
    }
    
    public function update(Request $data, $id)
    {
        $this->validate($data, [
            'name' => 'required|string|max:255',
            'name_ruby' => 'required|string|max:225',
            'email' => 'required|string|email|max:255|unique:users',
            'department' => 'required|string|max:225',
            'tel' => 'required|string|max:10',
            'birthday' => 'required|string|max:20',
            'hobby' => 'required|string|max:225',
            'comment' => 'required|string|max:225'
            ]);
        
        $user = User::find($id);
        $user->name = $data->name;
        $user->name_ruby = $data->name_ruby;
        $user->email = $data->email;
        $user->department = $data->department;
        $user->tel = $data->tel;
        $user->birthday = $data->birthday;
        $user->hobby = $data->hobby;
        $user->comment = $data->comment;
        $user->save();
        
        return redirect()->route('users.show', ['user' => $user]);
    }
}
