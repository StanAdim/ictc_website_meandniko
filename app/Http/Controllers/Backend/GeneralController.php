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
//            'type'=>'required',
//            'link'=>'required'
        ]);

        $general = General::first();
        if ($general) {

        } else {
            $general = new General();
        }
        $general->map_key = $request->map_key ?? null;
        $general->recaptcha_key = $request->recaptcha_key ?? null;
        $general->google_recaptcha_secret = $request->google_recaptcha_secret ?? null;
        $general->save();

        config(['recaptchav3.sitekey' => $general->recaptcha_key]);
        config(['recaptchav3.secret' => $general->google_recaptcha_secret]);

        Session::flash('success','General configuration has been updated Successfully');
        return redirect()->back();
    }
}
