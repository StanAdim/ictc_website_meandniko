<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Repositories\Banner\BannerRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners=Banner::all();
        $currentLanguage = Helper::currentLanguage();
        return view('backend.banners.index')
            ->withBanners($banners)
            ->with('currentLanguage', $currentLanguage);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banners.create');
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

        (new BannerRepository())->store($request);
        Session::flash('success','New Banner is added Successfully');
        return redirect()->route('backend.banners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Banner $banner
     * @return void
     */
    public function show(Banner $banner)
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
        $banner=Banner::find($id);
        return view('backend.banners.edit')->withBanner($banner);
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

        (new BannerRepository())->update($request, $id);

        Session::flash('success','Banner is updated Successfully');
        return redirect()->route('backend.banners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $deleted = (new BannerRepository())->destroy($id);
        if ($deleted) {
            Session::flash('success','Banner is deleted Successfully');
            return redirect()->route('backend.banners.index');
        } else {
            Session::flash('failed','Unable to delete banner. Please try again');
            return redirect()->route('backend.banners.index');
        }
    }
}
