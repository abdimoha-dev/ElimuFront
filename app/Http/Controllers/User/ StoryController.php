<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\CommentRequest;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class  StoryController extends Controller
{
    public function showStories()
    {
        return view('dashboard.user.news.news', [
            'articles' => Article::orderBy('created_at', 'desc')->paginate(10),
        ]);
    }

    //show comment form
    public function comment($id)
    {

        return view('dashboard/user/news/comment',['id'=>$id]);
    }

    public function saveComment(CommentRequest$request)
    {
        Comment::create([
            'comment'    => $request->comment,
            'article_id' =>$request-> $id,
        ]);

    }

}
