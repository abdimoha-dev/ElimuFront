<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class  StoryController extends Controller
{
    public function stories()
    {
        return view('dashboard.user.news.news', [
            'articles' => Upload::orderBy('created_at', 'desc')->paginate(10),
        ]);
    }

}
