<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UploadRequest;
use App\Models\Upload;
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
        Upload::create([
            'user_id' => auth()->user()->id,
            'tittle'  => $request->tittle,
            'body'    => $request->body,
        ]);

    }

    public function stories()
    {
        return view('dashboard.admin.news.news', [
            'articles' => Upload::whereNotIn('user_id',auth()->user())->orderBy('created_at','desc')->paginate(10),
        ]);
    }
}
