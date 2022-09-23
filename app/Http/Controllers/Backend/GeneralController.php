<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\General;
use App\Models\Social;
use App\Repositories\Social\SocialRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GeneralController extends Controller
{

    public function __construct()
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $general = General::first();
        return view('backend.general.index')
            ->withGeneral($general);
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
            'type'=>'required',
            'link'=>'required'
        ]);

        $general = General::first();
        if ($general) {

        }
        $this->query()->create([
            'type' => $request->type,
            'link' => $request->link,
        ]);
        (new SocialRepository())->store($request);
        Session::flash('success','New Social is added Successfully');
        return redirect()->route('backend.socials.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Social $social
     * @return void
     */
    public function show(Social $social)
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
        $social=Social::find($id);
        return view('backend.socials.edit')->withSocial($social)
            ->with('types', $this->types);
        ;
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
            'type'=>'required',
            'link'=>'required'
        ]);

        (new SocialRepository())->update($request, $id);

        Session::flash('success','Social is updated Successfully');
        return redirect()->route('backend.socials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $deleted = (new SocialRepository())->destroy($id);
        if ($deleted) {
            Session::flash('success','Social is deleted Successfully');
            return redirect()->route('backend.socials.index');
        } else {
            Session::flash('failed','Unable to delete social. Please try again');
            return redirect()->route('backend.socials.index');
        }
    }
}
