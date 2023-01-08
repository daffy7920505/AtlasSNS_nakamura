<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    //
    public function profile(){
        return view('users.profile');
    }
   public function search(Request $request){
       $users = User::get();//すべて取得
    if (!empty($request->keyword)) {
        $users = User::where('username','like',"%$request->keyword%")->get();//あいまい検索
    }

        return view('users.search',['users'=>$users]);
    }
    /**
     * プロフィール編集画面表示
     * @param
     * @return View プロフィール編集画面
     */
    public function show()
    {
        $user->id
        return view('users.profile');
    }

    /**
     * プロフィール編集機能（ユーザー名、メールアドレス）
     * @param
     * @return Redirect 一覧ページ-メッセージ（プロフィール更新完了）
     */
    public function profileUpdate()
    {
        return redirect()->route('articles_index')->with('msg_success', 'プロフィールの更新が完了しました');
    }

    /**
     * パスワード編集機能
     * @param
     * @return Redirect 一覧ページ-メッセージ（パスワード更新完了）
     */
    public function passwordUpdate()
    {
        return redirect()->route('articles_index')->with('msg_success', 'パスワードの更新が完了しました');
    }
}
