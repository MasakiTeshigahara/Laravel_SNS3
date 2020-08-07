<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Board;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class BoardsController extends Controller
{
    public function index(user $user)
    {
//ログインユーザーIDを取得し、そのユーザーが送った、または受け取ったboradを取得。
        $current_user_id = Auth::user()->id;
        $boards = Board::where('s_user_id', $current_user_id)->orwhere('r_user_id', $current_user_id)->get();
        $images = Image::all();


        return view('mypage', [
            'boards' => $boards,
            'images' => $images,
            'user'   => $user,
            ]);
    }

    public function show($id, User $user)
    {
//ボードモデルおよびメッセージモデルから、クリックしたboard_idの情報を取得する。
        $messages = Message::where('board_id', $id)->get();
        $board = Board::find($id);
        $images = Image::all();

        return view('messages', [
            'messages' => $messages, 
            'board' => $board,
            'images' => $images,
            'user'  => $user
            ]);
    }

    public function store(Request $request)
    {
        $board = new Board;
        $board->s_user_id = $request->s_user_id;
        $board->r_user_id = $request->r_user_id;
        $board->save();
        $images = Image::all();


//boards一覧表示に戻る
        return redirect()->action(
            'BoardsController@index',[
                'board' => $board,
                'images' => $images
            ]
        );
    }
    public function board_id ($id)
    {
    $boards = Message::where('s_user_id', $id)->where('r_user_id', $id)->get();
    $board = Board::find($boards->$id);
    $images = Image::all();


        return view('messages', [ 
            'board' => $board,
            'images' => $images
            ]);
    }
    
}
