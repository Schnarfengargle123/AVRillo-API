<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Models\Post;

class PostService {
    // public function getMessage(): Post {
    //     $latestPost = Post::latest('id')->first();
    //     // echo "Latest Post: " . $latestPost;
    //     return $latestPost; // Not returning data
    // }

    public function sendMessage(Request $request): Post {
        $userPost = new Post;

        $userPost->username = $request->username;
        $userPost->message = $request->message;

        // $userPost->username = $request->input('username');
        // $userPost->message = $request->input('message');

        $userPost->save();

        // echo "User Post: " . $userPost;
        return $userPost;
    }
}
