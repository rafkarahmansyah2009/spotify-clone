<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function store(Request $request)
    {
        $count = Playlist::count() + 1;
        Playlist::create([
            'name' => 'My Playlist #' . $count,
            'description' => 'A new playlist created by you.',
            'cover_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDQsNKJdMImCmSgt_fIgy_r6CHUHNmNwBSqKahOYp5NmgoEhFrvsI04ognWvthD8c0e5GwsPaeQgr_R_X2Zs5_5FCYNq1Jg4iom3mLWJR9-BJ-SpME7uQwsRwFw-akn98xrKtuGW1adKandJJcrxhArBv5Q1gkgA9jhF1uwJWccLQWjcWmfIJoZ_tla1V4LL2yq0a3UxXs7AH80jVLiJxrI5ksbZCWflhefAl0GApGmq_RwVl8BZRX8WUCilQW3nFtcI4z3euoM-LRD',
        ]);

        return redirect()->back(); // Redirect back to stay on same page
    }

    public function index()
    {
        $playlists = Playlist::latest()->get();
        return view('your-library', compact('playlists'));
    }

    public function destroy(Playlist $playlist)
    {
        $playlist->delete();
        return redirect()->back();
    }
}

