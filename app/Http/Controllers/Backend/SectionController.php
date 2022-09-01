<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Repositories\Section\SectionRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections=Section::all();
        $currentLanguage = Helper::currentLanguage();
        return view('backend.sections.index')
            ->withSections($sections)
            ->with('currentLanguage', $currentLanguage);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sections.create');
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

        (new SectionRepository())->store($request);
        Session::flash('success','New Section is added Successfully');
        return redirect()->route('backend.sections.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Section $section
     * @return void
     */
    public function show(Section $section)
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
        $section=Section::find($id);
        return view('backend.sections.edit')->withSection($section);
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

        (new SectionRepository())->update($request, $id);

        Session::flash('success','Section is updated Successfully');
        return redirect()->route('backend.sections.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $deleted = (new SectionRepository())->destroy($id);
        if ($deleted) {
            Session::flash('success','Section is deleted Successfully');
            return redirect()->route('backend.sections.index');
        } else {
            Session::flash('failed','Unable to delete section. Please try again');
            return redirect()->route('backend.sections.index');
        }
    }
}
