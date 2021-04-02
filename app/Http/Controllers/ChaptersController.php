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
        return Inertia::render('Chapters/List', [
            'chapters' => Chapter::all()->map(function ($chapters) {
                return [
                    'id' => $chapters->id,
                    'name' => $chapters->name,
                    'user_id' => $chapters->user_id,
                    'description'=> $chapters->description,
                    'logo_path' => $chapters->logo_path,
                    'logo_thin_path' => $chapters->logo_thin_path,
                    'created_at' => $chapters->created_at,
                    'can' => [
                        'edit_chapter' => Auth::user()->can('chapter-edit', $chapters),
                    ]
                ];
            })
        ]);
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
    public function edit(Chapter $chapter)
    {
        dd($chapter);
        return Inertia::render('Chapters/Edit', [
            'chapter' => [
                'id' => $chapter->id,
                'user_id' => $chapter->userId,
                'name' => $chapter->name,
                'description' => $chapter->description,
                'logo_path' => $chapter->logo_path,
                'logo_thin_path' => $chapter->logo_thin_path
            ],
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chapter $chapter)
    {

        $request->validate([
            'name' => ['required'],
            'userId' => ['required'],
            'description' => ['required'],
            'logo' => ['required'],
            'thinLogo' => ['required']
        ]);

        $chapter->update($request([
            'name' => $request['name'],
            'userId' => $request['userId'],
            'description' => $request['description'],
            'logo' => $request['logo'],
            'thinLogo' => $request['thinLogo'],
        ]));

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
        
        return Redirect::back()->with('success', 'Chapter updated.');
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