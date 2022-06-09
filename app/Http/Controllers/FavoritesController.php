<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    //お気に入り登録するアクション
    public function store($id)
    {
        //認証済みユーザが、idの投稿をお気に入りする
        \Auth::user()->favorite($id);
        //前のURLへリダイレクトさせる
        return back();
    }
    
    //お気に入り削除するアクション
    public function destroy($id)
    {
        //認証済みユーザが、idの投稿をお気に入り削除する
        \Auth::user()->unfavorite($id);
        //前のURLへリダイレクトさせる
        return back();
    }
}
