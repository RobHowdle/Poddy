<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Episode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class EpisodesController extends Controller
{
    public function index() 
    {
        $episodes = Episode::with('chapter')->take(30)->orderBy('created_at','desc')->get();
        
        return Inertia::render('Episodes/List', [
            'episodes' => $episodes
            ]);
    }

    public function show($id)
    {
        $episodes = Episode::with(['chapter', 'user'])->where('id', $id)->get();
        return Inertia::render('Episodes/Listen', [
            'episodes' => $episodes
        ]);
    }

    public function latestEpisode()
    {
        return response()->json(Episode::with('chapter')
                ->orderBy('created_at', 'ASC')
                ->take(1)
                ->get()
        );
    }
}