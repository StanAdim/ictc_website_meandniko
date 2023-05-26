<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Repositories\Page\PageRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        $currentLanguage = Helper::currentLanguage();
        return view('backend.pages.index')
            ->withPages($pages)
            ->with('currentLanguage', $currentLanguage);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.create');
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
            'slug'=>'required',
            'title_sw'=>'required',
            'title_en'=>'required',
            'description_sw'=>'required',
            'description_en'=>'required',
        ]);

        (new PageRepository())->store($request);
        Session::flash('success','New Page is added Successfully');
        return redirect()->route('backend.pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Page $page
     * @return void
     */
    public function show(Page $page)
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
        $page=Page::find($id);
        return view('backend.pages.edit')->withPage($page);
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
            'slug'=>'required',
            'title_sw'=>'required',
            'title_en'=>'required',
            'description_sw'=>'required',
            'description_en'=>'required',
        ]);

        (new PageRepository())->update($request, $id);

        Session::flash('success','Page is updated Successfully');
        return redirect()->route('backend.pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $deleted = (new PageRepository())->destroy($id);
        if ($deleted) {
            Session::flash('success','Page is deleted Successfully');
            return redirect()->route('backend.pages.index');
        } else {
            Session::flash('failed','Unable to delete page. Please try again');
            return redirect()->route('backend.pages.index');
        }
    }
}
