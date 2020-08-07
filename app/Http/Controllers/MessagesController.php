<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Image;


class MessagesController extends Controller
{
    public function store(Request $request)
    {
        $message = new Message;
        $message->msg = $request->msg;
        $message->board_id = $request->board_id;
        $message->user_id = $request->user_id;
        $message->save();
        $images = Image::all();


        $res = array(
            'message' => $message,
            'user_icon' => $message->user->profile_image,
            'user_name' => $message->user->name,
            'images' => $images
        );

        return $res;
    }
}
