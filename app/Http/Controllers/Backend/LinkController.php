<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Link;
use App\Repositories\Link\LinkRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LinkController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::all();
        return view('backend.links.index')
            ->withLinks($links);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.links.create');
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
        $this->validate($request, [
            'title'=>'required',
            'link'=>'required'
        ]);

        (new LinkRepository())->store($request);
        Session::flash('success','New Link is added Successfully');
        return redirect()->route('backend.links.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Link $link
     * @return void
     */
    public function show(Link $link)
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
        $link=Link::find($id);
        return view('backend.links.edit')->withLink($link);
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
        $this->validate($request, [
            'title'=>'required',
            'link'=>'required'
        ]);

        (new LinkRepository())->update($request, $id);

        Session::flash('success','Link is updated Successfully');
        return redirect()->route('backend.links.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $deleted = (new LinkRepository())->destroy($id);
        if ($deleted) {
            Session::flash('success','Link is deleted Successfully');
            return redirect()->route('backend.links.index');
        } else {
            Session::flash('failed','Unable to delete link. Please try again');
            return redirect()->route('backend.links.index');
        }
    }
}
