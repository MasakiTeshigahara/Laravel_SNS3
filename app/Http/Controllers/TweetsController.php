<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Tweet;
use App\Models\Comment;
use App\Models\Follower;
use App\Models\Image;

class TweetsController extends Controller
{
    public function index(Tweet $tweet, Follower $follower)
    {
        //一覧表示
        $user = auth()->user();
        $follow_ids = $follower->followingIds($user->id);
        $following_ids = $follow_ids->pluck('followed_id')->toArray();

        $timelines = $tweet->getTimelines($user->id, $following_ids);
        $images = Image::all();

        return view('tweets.index', [
            'user'      => $user,
            'timelines' => $timelines,
            'images'    => $images,
            
        ]);
    }

    //新規ツイート入力画面
    public function create()
    {
        $user = auth()->user();
        $images = Image::all();

        return view('tweets.create', [
            'user' => $user,
            'images' => $images,
        ]);
    }


    //新規ツイート投稿処理
    public function store(Request $request, Tweet $tweet)
    {
        $user = auth()->user();
        $data = $request->all();

        $validator = Validator::make($data, [
            'text' => ['required', 'string', 'max:140'],

        ]);
        

     
        $validator->validate();

        $tweet->tweetStore($user->id, $data);

        return redirect('tweets');
    }

    //ツイート詳細画面
    public function show(Tweet $tweet, Comment $comment, Image $image)
    {
        $user = auth()->user();
        $tweet = $tweet->getTweet($tweet->id);
        $comments = $comment->getComments($tweet->id);
        $images = Image::all();


        return view('tweets.show', [
            'user'     => $user,
            'tweet'    => $tweet,
            'comments' => $comments,
            'images'    => $images,
        ]);
    }

    //ツイート編集画面
    public function edit(Tweet $tweet)
    {
        $user = auth()->user();
        $tweets = $tweet->getEditTweet($user->id, $tweet->id);
        $images = Image::all();


        if (!isset($tweets)) {
            return redirect('tweets');
        }

        return view('tweets.edit', [
            'user'   => $user,
            'tweets' => $tweets,
            'images'    => $images,
        ]);
    }

    //ツイート編集処理
    public function update(Request $request, Tweet $tweet)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'text' => ['required', 'string', 'max:140']
        ]);

        $validator->validate();
        $tweet->tweetUpdate($tweet->id, $data);

        return redirect('tweets');
    }

    //ツイート削除処理
    public function destroy(Tweet $tweet)
    {
        $user = auth()->user();
        $tweet->tweetDestroy($user->id, $tweet->id);

        return back();
    }
}
