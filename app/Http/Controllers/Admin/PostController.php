<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(6);
        return view('Backend/admin/post/index',compact('posts'));
    }

    public function create()
    {
        return view('Backend/admin/post/create');
    }

    public function store(PostRequest $request)
    {
        // $path = 'uploads';
        // $imagePath = storage_path($path);

        // $post = new Post();
        // $imageName = time().'_'.$request->file('image')->getClientOriginalName();
        // $request->file('image')->storeAs('uploads',$imageName);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $request->file('image')->storeAs('uploads',$imageName);
         
            Post::create([
                'title' => $request->title,
                'content' => $request->content,
                'image' => $imageName,
                ]);
        }else{
            Post::create([
                'title' => $request->title,
                'content' => $request->content,
                ]);
        }

        // $post = Post::create($request->all());
        return redirect('admin/dashboard/post')->with('success','Successfully Create Post!');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('Backend/admin/post/show',compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('Backend/admin/post/update',compact('post'));
    }

    public function update(PostRequest $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect('admin/dashboard/post')->with('success','Successfully Update Post!');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('admin/dashboard/post')->with('success','Successfully Delete Post!');
    }
}
