<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create(Request $request)
    {
        if ($request->isMethod('POST')) {
 
            $path = $request->file('image_file')->store('public/img');
 
            Item::create(['file_name' => basename($path)]);
 
            return redirect('/')->with(['success'=> 'ファイルを保存しました']);
        }
        // GET
        return view('item.create');
    }
}
