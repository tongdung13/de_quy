<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\PostLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::query()->orderBy('id', 'desc')->get();
        return view('admin.blogs.index', compact(
            'post'
        ));;
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
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required'
        ], [
            'title.required' => 'Vui long nhap title',
            'description.required' => 'Vui long nhap description',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 2,
                'code' => 200,
                'message' => $validator->getMessageBag(),
                'data' => [],
            ], 200);
        }

        $post = new Post();
        $post->fill($request->all());
        $post->save();

        return response()->json([
            'status' => 1,
            'code' => 200,
            'message' => 'success',
            'data' => [
                'post' => $post,
            ],
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);

        if (empty($posts)) {
            return response()->json([
                'status' => 2,
                'code' => 200,
                'message' => 'Khong tim thay bai post nay',
                'data' => []
            ], 200);
        }

        return view('admin.posts.detail', compact(
            'posts'
        ));;
    }

    public function like(Request $request)
    {
        $user = Auth::user();
        $like = new PostLike();
        $like->post_id = $request->post;
        $like->user_id = $user->id;
        $like->like = 1;
        $like->save();

        return response()->json($like);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
