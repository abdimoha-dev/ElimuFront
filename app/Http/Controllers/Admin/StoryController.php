<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UploadRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoryController extends Controller
{
    public function showForm()
    {
        return view('dashboard.admin.news.story');
    }

    public function saveStory(UploadRequest $request)
    {
        Article::create([
            'user_id' => auth()->user()->id,
            'tittle'  => $request->tittle,
            'body'    => $request->body,
        ]);

    }

    public function stories()
    {
        return view('dashboard.admin.news.news', [
            'articles' => Article::whereNotIn('user_id',auth()->user())->orderBy('created_at','desc')->paginate(10),
        ]);
    }
}
