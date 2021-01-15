<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use DB;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $posts = Post::paginate(5);
        //hoặc $students = Student::orderBy('id', 'desc')->get();
        return view('posts.listPost', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $posts = Post::find($post);
        $postQuery = DB::table('posts')->find($post);
        $postObj = $post;
        return view('posts.showPost', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.editPost', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->desc = $request->desc;
        $post->content = $request->content;
        $post->image_url = $request->image_url;
        $post->student_id = $request->student_id;
        $post->status = $request->status;

        // Thuc hien goi phuong thuc save() de luu du lieu
        $post->save();

        // Cach 2: $student->update(['name' => $request->name]);
        // Hoac $student->update([$request->all()])
        // Khong can save
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post) {
            $post->delete(); // tra ve ket qua true/false
        }

        // Cach 2: Student::destroy($student->id); // tra ve so luong ban ghi bi xoa
        // Redirect ve danh sach (co thuc hien truy van lay ds moi)
        return redirect()->route('posts.index');
    }
    
}
