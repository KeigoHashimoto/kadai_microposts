<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MicropostsController extends Controller
{
    public function index(){
        $data = [];
            //   認証済みユーザーを取得
        if(\Auth::check()){
            $user=\Auth::user();
            $microposts=$user->microposts()->orderby('created_at','desc')->paginate(10);
            
            $data=[
                'user'=>$user,
                'microposts'=>$microposts,
                ];
        }
        return view('welcome',$data);
    }
    
    public function store(Request $request){
        // バリデーション
        $request->validate([
            'content'=>'required|max:255',
            ]);
        
        // 認証済みユーザーの投稿として作成
        $request->user()->microposts()->create([
            'content'=>$request->content,
            ]);
            
        // ひとつ前に戻る
        return back();
    }
    
    public function destroy($id){
        $micropost=\App\Micropost::findorFail($id);
        
        if(\Auth::id()===$micropost->user_id){
            $micropost->delete();
        }
        
        return back();
    }
}
