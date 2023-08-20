<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Services\PostService;

class MessageController extends Controller
{
    // private PostService $postService;

    // public function __construct(PostService $postService) {
    //     $this->postService = $postService;
    // }

    public function __construct(private PostService $postService) {}

    public function getMessage(Request $request) {
        $latestPost = Post::latest('id')->first();
        return $latestPost;
    }

    public function sendMessage(Request $request, Post $post) {
        // $this->postService->sendMessage($request, $post);
        $this->postService->sendMessage($request);
        return redirect('/api/messages');
    }
}
