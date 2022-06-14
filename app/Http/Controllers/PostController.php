<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Overtrue\LaravelLike\Like;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(12);

        $query = request()->query('tag') ?? request()->query('search');

        if ($query) {
            $posts = Post::where('title', 'like', "%$query%")->orWhere('tags', 'like', "%$query%")->latest()->paginate(12);
        }

        $topPosts = Post::withCount('likers')->orderBy('likers_count', 'desc')->get(5);

        return view('posts.index')->with(['posts' => $posts, 'topPosts' => $topPosts]);
    }

    // display dashboard
    public function dashboard()
    {
        $posts = Post::where('user_id', '=', Auth::user()->id)->orderBy('id', 'DESC')->get();

        $user = Auth::user();

        $totalReactions = Like::withType(Post::class)->whereRelation('likeable', 'user_id', $user->id)->count();

        return view('posts.dashboard')->with(['posts' => $posts, 'totalReactions' => $totalReactions]);
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
        $validImage = $request->hasFile('bg_img') && $request->file('bg_img')->isValid();

        if ($validImage) {
            $originalName = $request->bg_img->getClientOriginalName();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $extension = $request->file('bg_img')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $validFields['bg_img'] = $request->file('bg_img')->storeAs('covers', $fileName, 'public');
        }

        $newPost = Post::create($validFields);

        return redirect("/posts/$newPost->id");
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
        $post = Post::find($id);

        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
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
        $validFields = $request->validate(['title' => 'required', 'body' => 'required']);

        if ($request->has('tags')) {
            $validFields['tags'] = json_encode($request->tags);
        }

        $validFields['user_id'] = Auth::user()->id;

        // post bg image
        $validImage = $request->hasFile('bg_img') && $request->file('bg_img')->isValid();

        if ($validImage) {
            $originalName = $request->bg_img->getClientOriginalName();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $extension = $request->file('bg_img')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $validFields['bg_img'] = $request->file('bg_img')->storeAs('covers', $fileName, 'public');
        }
        $post = Post::find($id);
        $post->update($validFields);

        return redirect("/posts/$post->id")->with('status', 'Post updated successfully');
    }

    // toggle like of post
    public function toggleLike($id)
    {
        $user = Auth::user();

        $post = Post::find($id);

        $user->toggleLike($post);

        return back();
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

        return back()->with('status', 'Post deleted successfully');
    }
}