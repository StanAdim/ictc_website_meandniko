<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Leader;
use App\Repositories\Leader\LeaderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaders=Leader::all();
        $currentLanguage = Helper::currentLanguage();
        return view('backend.leaders.index')
            ->withLeaders($leaders)
            ->with('currentLanguage', $currentLanguage);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.leaders.create');
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
            'details_sw'=>'required',
            'details_en'=>'required',
        ]);

        (new LeaderRepository())->store($request);
        Session::flash('success','New Leader is added Successfully');
        return redirect()->route('backend.leaders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Leader $leader
     * @return void
     */
    public function show(Leader $leader)
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
        $leader=Leader::find($id);
        return view('backend.leaders.edit')->withLeader($leader);
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
        $this->validate($request,[
            'title_sw'=>'required',
            'title_en'=>'required',
            'details_sw'=>'required',
            'details_en'=>'required',
        ]);

        (new LeaderRepository())->update($request, $id);

        Session::flash('success','Leader is updated Successfully');
        return redirect()->route('backend.leaders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $deleted = (new LeaderRepository())->destroy($id);
        if ($deleted) {
            Session::flash('success','Leader is deleted Successfully');
            return redirect()->route('backend.leaders.index');
        } else {
            Session::flash('failed','Unable to delete leader. Please try again');
            return redirect()->route('backend.leaders.index');
        }
    }
}
