<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Repositories\Event\EventRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        $currentLanguage = Helper::currentLanguage();
        return view('backend.events.index')
            ->withEvents($events)
            ->with('currentLanguage', $currentLanguage);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.events.create');
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
            'start_date'=>'required',
            'end_date'=>'required',
            'description_sw'=>'required',
            'description_en'=>'required',
        ]);

        (new EventRepository())->store($request);
        Session::flash('success','New Event is added Successfully');
        return redirect()->route('backend.events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Event $event
     * @return void
     */
    public function show(Event $event)
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
        $event=Event::find($id);
        return view('backend.events.edit')->withEvent($event);
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
            'start_date'=>'required',
            'end_date'=>'required',
            'description_sw'=>'required',
            'description_en'=>'required',
        ]);

        (new EventRepository())->update($request, $id);

        Session::flash('success','Event is updated Successfully');
        return redirect()->route('backend.events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $deleted = (new EventRepository())->destroy($id);
        if ($deleted) {
            Session::flash('success','Event is deleted Successfully');
            return redirect()->route('backend.events.index');
        } else {
            Session::flash('failed','Unable to delete event. Please try again');
            return redirect()->route('backend.events.index');
        }
    }
}
