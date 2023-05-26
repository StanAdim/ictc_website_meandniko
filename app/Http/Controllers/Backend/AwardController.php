<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Repositories\Award\AwardApplicationRepository;
use App\Repositories\Award\AwardRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $awards = Award::where('award_date','>', Carbon::now())->get();
        $currentLanguage = Helper::currentLanguage();
        return view('backend.awards.index')
            ->withAwards($awards)
            ->with('currentLanguage', $currentLanguage);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.awards.create');
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
            'application_deadline'=>'required',
            'award_date'=>'required',
            'description_sw'=>'required',
            'description_en'=>'required',
        ]);

        (new AwardRepository())->store($request);
        Session::flash('success','New Award is added Successfully');
        return redirect()->route('backend.awards.index');
    }


    public function show($id)
    {
        $award=Award::find($id);
        return view('backend.awards.show')->withAward($award);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $award=Award::find($id);
        return view('backend.awards.edit')->withAward($award);
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
            'application_deadline'=>'required',
            'award_date'=>'required',
            'description_sw'=>'required',
            'description_en'=>'required',
        ]);

        (new AwardRepository())->update($request, $id);

        Session::flash('success','Award is updated Successfully');
        return redirect()->route('backend.awards.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $deleted = (new AwardRepository())->destroy($id);
        if ($deleted) {
            Session::flash('success','Award is deleted Successfully');
            return redirect()->route('backend.awards.index');
        } else {
            Session::flash('failed','Unable to delete award. Please try again');
            return redirect()->route('backend.awards.index');
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @param $uid
     * @return \Illuminate\Http\Response
     */
    public function applications($uid)
    {
        $award = (new AwardRepository())->getOneByUid($uid);
        if ($award) {
            $applications = $award->applications;
            return view('backend.awards.applications')
                ->with('applications', $applications);
        }
        Session::flash('failed','Unable to find award application. Please try again');
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $uid
     * @return \Illuminate\Http\Response
     */
    public function showApplication($uid)
    {
        $application = (new AwardApplicationRepository())->getOneByUid($uid);
        if ($application) {
            return view('backend.awards.application_show')
                ->with('application', $application);
        }
        Session::flash('failed','Unable to find application. Please try again');
        return back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param $uid
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroyApplication($uid)
    {
        $application = (new AwardApplicationRepository())->getOneByUid($uid);
        $award = $application && $application->award ? $application->award : null;
        try {
            $deleted = (new AwardApplicationRepository())->destroy($uid);
            if ($deleted) {
                Session::flash('success','Award Application is deleted Successfully');
                return redirect()->route('backend.award.applications', $award->uid);
            } else {
                Session::flash('failed','Unable to delete Award Application. Please try again');
                return redirect()->route('backend.award.applications', $award->uid);
            }
        } catch (\Exception $e) {
            Session::flash('failed','Unable to delete Award Application. Please try again');
            return redirect()->route('backend.awards.index');
        }


    }




}
