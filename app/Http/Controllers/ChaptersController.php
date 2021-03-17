<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Chapter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;


class ChaptersController extends Controller
{
    public function index()
    {
        $chapters = Chapter::all();
        
        return Inertia::render('Chapters/List', ['chapters' => $chapters]);
    }
}