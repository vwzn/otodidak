<?php

namespace App\Http\Controllers\Tweet;

use App\Models\Tweet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class TweetUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id): RedirectResponse
    {
        $tweet = Tweet::find($id);

        $tweet->update([
            'content'=> request('content')
        ]);
        
        return redirect()->back();
    }
}
