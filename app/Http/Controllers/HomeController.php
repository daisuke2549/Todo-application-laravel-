<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    class HomeController extends Controller
    {
        public function index()
        {
            // ログインユーザーを取得する
            $user = Auth::user();
    
            // ログインユーザーに紐づくフォルダを一つ取得する
            $folder = $user->folders()->first();
    
            // まだ一つもフォルダを作っていなければホームページをレスポンスする
            if (is_null($folder)) {
                return view('home');
            }
    
            // フォルダがあればそのフォルダのタスク一覧にリダイレクトする
            return redirect()->route('posts.index', [
                'id' => $folder->id,
            ]);
        }
    }
