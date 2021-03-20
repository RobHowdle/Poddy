<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Chapter;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;


class ChaptersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chapters = Chapter::all();

        return Inertia::render('Chapters/List', ['chapters' => $chapters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Chapters/Upsert');
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
            'name' => ['required'],
            'user_id' => ['required'],
            'description' => ['required'],
            'logo' => ['required'],
            'thinLogo' => ['required']
        ]);

            $chapter = new Chapter();
            $chapter->name = $request['name'];
            $chapter->user_id = $request['user_id'];
            $chapter->description = $request['description'];
            
            if($request['logo']) {
                $logo = $request['logo'];
                $extension = $logo->getClientOriginalExtension();
                $name = time() . '_'. $logo->getClientOriginalName();
                Storage::disk('public')->put($name, File::get($logo));
                $chapter->logo_path = $name;
                $chapter->logo_thin_path = $name;
            }

            $chapter->save();

        // Chapter::create([
        //     'name'=> $request->get('name'),
        //     'host'=> $request->get('host'),
        //     'description'=> $request->get('description'),
        //     'logo_path'=> $request->file('logo') ? $request->file('logo')->store('/images/chapter_logos') : null,
        //     'logo_thin_path'=> $request->file('thinLogo') ? $request->file('thinLogo')->store('/images/chapter_logos') :
        //     null,
        // ]);
    
            return Redirect::route('chapters')->with('success', 'Chapter created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}