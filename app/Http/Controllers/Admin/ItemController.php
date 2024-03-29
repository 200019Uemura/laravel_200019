<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    //商品一覧ページ
    public function index()
    {
        //SELECT * FROM items;
        $items = Item::get();
        $data = ['items' => $items];
        return view('admin.item.index', $data);
    }

    //商品入力
    public function create()
    {
        return view('admin.item.create');
    }

    //商品追加  
    public function add(Request $request)
    {
        $posts = $request->all();
        // dd($posts);
        //INSERT INTO items SET name = 'XXXX', code ='XXXX', ...;
        Item::create($posts);
        //商品一覧にリダイレクト
        return redirect('/admin/item/');
    }
}