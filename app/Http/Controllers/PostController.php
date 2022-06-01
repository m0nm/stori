<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('posts.index')->with('posts', $posts);
    }

    // display dashboard
    public function dashboard()
    {
        $posts = Post::where('user_id', '=', Auth::user()->id)->orderBy('id', 'DESC')->get();

        return view('posts.dashboard')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validFields = $request->validate(['title' => 'required', 'body' => 'required']);

        if ($request->has('tags')) {
            $validFields['tags'] = json_encode($request->tags);
        }

        $validFields['user_id'] = Auth::user()->id;

        // post bg image
        $valideImage = $request->hasFile('bg_img') && $request->file('bg_img')->isValid();

        if ($valideImage) {
            $originalName = $request->bg_img->getClientOriginalName();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $extension = $request->file('bg_img')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $validFields['bg_img'] = $request->file('bg_img')->storeAs('covers', $fileName, 'public');
        }

        Post::create($validFields);

        return redirect('/');
    }


    // ckeditor images
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originalName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('storage/uploads'), $fileName);

            $url = asset('storage/uploads/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
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
        Post::destroy($id);

        return back();
    }
}