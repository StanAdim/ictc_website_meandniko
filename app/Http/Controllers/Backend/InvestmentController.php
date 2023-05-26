<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Investment;
use App\Repositories\Investment\InvestmentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investments = Investment::all();
        $currentLanguage = Helper::currentLanguage();
        return view('backend.investments.index')
            ->withInvestments($investments)
            ->with('currentLanguage', $currentLanguage);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.investments.create');
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

        (new InvestmentRepository())->store($request);
        Session::flash('success','New Investment is added Successfully');
        return redirect()->route('backend.investments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Investment $investment
     * @return void
     */
    public function show(Investment $investment)
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
        $investment=Investment::find($id);
        return view('backend.investments.edit')->withInvestment($investment);
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

        (new InvestmentRepository())->update($request, $id);

        Session::flash('success','Investment is updated Successfully');
        return redirect()->route('backend.investments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $deleted = (new InvestmentRepository())->destroy($id);
        if ($deleted) {
            Session::flash('success','Investment is deleted Successfully');
            return redirect()->route('backend.investments.index');
        } else {
            Session::flash('failed','Unable to delete investment. Please try again');
            return redirect()->route('backend.investments.index');
        }
    }
}
