<?php

namespace App\Http\Controllers\Tweet;

use App\Models\Tweet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TweetEditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id) :View
    {
        return view('tweets.edit', [
            'tweet' => Tweet::find($id)
        ]);
    }
}
