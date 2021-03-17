<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function applePlayer()
    {
        return Inertia::render('Players/Apple');
    }

    public function spotifyPlayer()
    {
        return Inertia::render('Players/Spotify');
    }
}