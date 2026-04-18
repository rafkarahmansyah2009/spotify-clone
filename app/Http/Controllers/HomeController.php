<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Playlist;

class HomeController extends Controller
{
    public function index()
    {
        $albums = Album::with('artist')->latest()->take(6)->get();
        $playlists = Playlist::latest()->take(5)->get();
        
        return view('home', compact('albums', 'playlists'));
    }
}
