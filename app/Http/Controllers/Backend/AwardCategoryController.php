<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\AwardCategory;
use App\Repositories\Award\AwardCategoryRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AwardCategoryController extends Controller
{
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
            'award_id'=>'required',
            'title'=>'required',
        ]);

        (new AwardCategoryRepository())->store($request);
        $award = Award::find($request->award_id);
        Session::flash('success',' Award Category has been added Successfully');
        return redirect()->route('backend.awards.show', $award->id);
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
            'title'=>'required',
        ]);

        (new AwardCategoryRepository())->update($request, $id);
        $award_category = AwardCategory::find($id);
        if ($award_category) {
            Session::flash('success','Award has been updated Successfully');
            return redirect()->route('backend.awards.show',$award_category->award->id);
        } else {
            Session::flash('failed','Something went wrong');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $award_category = AwardCategory::find($id);
        $award = $award_category->award;
        $deleted = (new AwardCategoryRepository())->destroy($id);
        if ($deleted) {
            Session::flash('success','Award Category has been deleted Successfully');
            return redirect()->route('backend.awards.show', $award->id);
        } else {
            Session::flash('failed','Unable to delete award category. Please try again');
            return redirect()->route('backend.awards.index', $award->id);
        }
    }
}
