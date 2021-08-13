<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\File; 



class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::orderBy('created_at','desc')->paginate(5);
        return view('posts.index')->with('posts',$posts);
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
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'cover_image'=>'image|nullable|max:2048'
        ]);

        //Handle Cover Image Upload
        $fileName = time().'.'.$request->cover_image->extension();  
        $request->cover_image->move(public_path('CoverImages'), $fileName);

        //create new blog
        $post= new Post;
        $post->title= $request->input('title');
        $post->body= $request->input('body');
        $post->user_id=auth()->user()->id;
        $post->cover_image=$fileName;
        $post->save();

        return redirect('/posts')->with('success','Blog created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::findOrFail($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::findOrFail($id);
        // check for correct user
        if(auth()->user()->id == $post->user_id){
        return view('posts.edit')->with('post',$post);
        }
        return redirect('/posts')->with('error','Unauthorised page');
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
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);

        //Handle Cover Image Upload
        $fileName = time().'.'.$request->cover_image->extension();  
        $request->cover_image->move(public_path('CoverImages'), $fileName);

        //update post
        $post= Post::findOrFail($id);
        $post->title= $request->input('title');
        $post->body= $request->input('body');
        if($request->hasFile('cover_image')){
            $post->cover_image=$fileName;
        }
        $post->save();

        return redirect('/posts')->with('success','Blog editted successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::findOrFail($id);
        // check for correct user
        if(auth()->user()->id == $post->user_id){
         // Delete image from directory folder
         unlink("CoverImages/".$post->cover_image);  

        $post->delete();
        return redirect('/posts')->with('success','Post deleted successfully!');
        }

        return redirect('/posts')->with('error','Unauthorised page');
    }
}
