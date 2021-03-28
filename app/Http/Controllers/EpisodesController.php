<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Episode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;


class EpisodesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $episodes = Episode::with('chapter')->take(30)->orderBy('created_at','desc')->get();

            return Inertia::render('Episodes/List', [
                'episodes' => $episodes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Episodes/Upsert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> ['required'],
            'short_description'=> ['required'],
            'long_description'=> ['required'],
            'chapter_id'=> ['required'],
            'user_id'=> ['required'],
            'author_email'=> ['required'],
            'file'=> ['required'],
            'url'=> ['required'],
        ]);
        dd($request->all());

        $episode = new Episode();
        $episode->title = $request['title'];
        $episode->short_description = $request['short_description'];
        $episode->long_description = $request['long_description'];
        $episode->chapter_id = $request['chapter_id'];
        $episode->user_id = $request['user_id'];
        $episode->author_email = $request['author_email'];
        $episode->file = $request['file'];
        $episode->url = $request['url'];
        
        if($request['file']) {
        $file = $request['file'];
        $extension = $file->getClientOriginalExtension();
        $name = time() . '_'. $file->getClientOriginalName();
        Storage::disk('public')->put($name, File::get($file));
        $episode->url = $name;
        }

        $episode->save();

        return Redirect::route('episodes')->with('success', 'Episode upload.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $episodes = Episode::with(['chapter', 'user'])->where('id', $id)->get();
            return Inertia::render('Episodes/Listen', [
                'episodes' => $episodes
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function latestEpisode()
    {
        return response()->json(Episode::with('chapter')
            ->orderBy('created_at', 'desc')
            ->take(1)
            ->get()
        );
    }
}