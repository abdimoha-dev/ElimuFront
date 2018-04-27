<?php

namespace App\Http\Controllers\User;

use App\Models\Upload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class  StoryController extends Controller
{
    public function showStories()
    {
        return view('dashboard.user.news.news', [
            'articles' => Upload::orderBy('created_at', 'desc')->paginate(10),
        ]);
    }

}
