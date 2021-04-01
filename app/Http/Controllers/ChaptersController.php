<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        return Inertia::render('Chapters/Upsert', [
        'users' => User::where('is_host', 1)->get()
        ]);
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
            'userId' => ['required'],
            'description' => ['required'],
            'logo' => ['required'],
            'thinLogo' => ['required']
        ]);

            $chapter = new Chapter();
            $chapter->name = $request['name'];
            $chapter->user_id = $request['userId'];
            $chapter->description = $request['description'];
            
            if($request['logo']) {
                $logo = $request['logo'];
                $extension = $logo->getClientOriginalExtension();
                $name = time() . '_'. $logo->getClientOriginalName();
                Storage::disk('public')->put($name, File::get($logo));
                $chapter->logo_path = $name;
            }
                if($request['thinLogo']) {
                $thinLogo = $request['thinLogo'];
                $extension = $thinLogo->getClientOriginalExtension();
                $name = time() . '_'. $thinLogo->getClientOriginalName();
                Storage::disk('public')->put($name, File::get($thinLogo));
                $chapter->logo_thin_path = $name;
            }
            
            $chapter->save();
    
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
        $chapters = Chapter::with('episode')
            ->where('id', $id)
            ->get();
        return Inertia::render('Chapters/View', [
        'chapters' => $chapters
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
}