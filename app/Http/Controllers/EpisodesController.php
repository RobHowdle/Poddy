<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use Illuminate\Http\Request;

class EpisodesController extends Controller
{
    public function index()
    {
        return response()->json(Episode::with('chapter')
                ->orderBy('created_at', 'DESC')
                ->take(1)
                ->get()
        );
    }
}