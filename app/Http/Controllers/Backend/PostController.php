<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Repositories\Post\PostRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $currentLanguage = Helper::currentLanguage();
        return view('backend.posts.index')
            ->withPosts($posts)
            ->with('currentLanguage', $currentLanguage);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title_sw'=>'required',
            'title_en'=>'required',
            'description_sw'=>'required',
            'description_en'=>'required',
        ]);

        (new PostRepository())->store($request);
        Session::flash('success','New Post is added Successfully');
        return redirect()->route('backend.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return void
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        return view('backend.posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     * @internal param Spare $spare
     */
    public function update(Request $request, $id)
    {
//        dd($request->all());
        $this->validate($request,[
            'title_sw'=>'required',
            'title_en'=>'required',
            'description_sw'=>'required',
            'description_en'=>'required',
        ]);

        (new PostRepository())->update($request, $id);

        Session::flash('success','Post is updated Successfully');
        return redirect()->route('backend.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $deleted = (new PostRepository())->destroy($id);
        if ($deleted) {
            Session::flash('success','Post is deleted Successfully');
            return redirect()->route('backend.posts.index');
        } else {
            Session::flash('failed','Unable to delete post. Please try again');
            return redirect()->route('backend.posts.index');
        }
    }
}
