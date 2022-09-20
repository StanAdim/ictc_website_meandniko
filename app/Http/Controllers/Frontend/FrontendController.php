<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\AwardApplication;
use App\Models\Banner;
use App\Models\Event;
use App\Models\Investment;
use App\Models\Leader;
use App\Models\Page;
use App\Models\Post;
use App\Repositories\Award\AwardApplicationRepository;
use App\Repositories\Contact\ContactRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
//    protected $trip;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $SliderBanners = Banner::all();
        $leaders = Leader::all();
        $latest_news = Post::latest()->limit(2)->get();
        $latest_events = Event::orderBy('start_date', 'desc')->limit(2)->get();
        return view('frontend.index')
            ->with('SliderBanners', $SliderBanners)
            ->with('leaders', $leaders)
            ->with('latest_news', $latest_news)
            ->with('latest_events', $latest_events);
    }

    public function about()
    {
        return view('frontend.about');
//                ->with('user', $user);
    }

    public function news()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(6);
        return view('frontend.news',compact('posts'));
    }

    public function singleNews($slug) {
        $post = Post::where('slug', $slug)->first();
        if ($post) {
            return view('frontend.news_single',compact('post'));
        }
        abort(404);
    }

    public function events()
    {
        $events = Event::orderBy('id', 'desc')->paginate(6);
        return view('frontend.events',compact('events'));
//                ->with('user', $user);
    }

    public function singleEvent($slug) {
        $event = Event::where('slug', $slug)->first();
        if ($event) {
            return view('frontend.event_single',compact('event'));
        }
        abort(404);
    }

    public function awards()
    {
        $awards = Award::orderBy('id', 'desc')->paginate(6);
        return view('frontend.awards',compact('awards'));
//                ->with('user', $user);
    }

    public function singleAward($slug) {
        $award = Award::where('slug', $slug)->first();
        if ($award) {
            return view('frontend.award_single',compact('award'));
        }
        abort(404);
    }

    public function applyAward($slug) {
        $award = Award::where('slug', $slug)->first();
        if ($award) {
            return view('frontend.apply_award',compact('award'));
        }
        abort(404);
    }

    public function awardApplicationShow($uid) {
        $application = AwardApplication::where('uid', $uid)->first();
        if ($application) {
            return view('frontend.award_application',compact('application'));
        }
        abort(404);
    }

    public function awardStore(Request $request) {
        $this->validate(
            $request,
            [
                'startup_name'=>'required',
                'founder_names'=>'required',
                'phone'=>'required',
                'email'=>'required|email',
                'city'=>'required',
                'startup_description'=>'required',
                'date_of_incorporation'=>'required',
                'no_of_staff'=>'required',
                'product_service'=>'required',
                'achievements'=>'required',
                'major_achievements'=>'required',
                'impact_of_startup'=>'required',
                'growth_plan'=>'required',
                'award_recognition'=>'required',
                'why_your_startup'=>'required',
                'list_of_social_media'=>'required',
                'contact_name'=>'required|min:10',
                'contact_email'=>'required|email',
                'contact_phone'=>'required',
                'company_registration_document_file'=>'mimes:pdf',
                'tax_registration_document_file'=>'mimes:pdf',
                'startup_logo'=>'mimes:jpeg,bmp,png',
                'startup_pitch_deck'=>'mimes:pdf,ppt,pptx',
            ]
        );

        $application = (new AwardApplicationRepository())->store($request);
        Session::flash('success','Your Application received successfully. We will get back to you through your contact details');
        return redirect()->route('frontend.application.show', $application->uid);
    }


    public function awardUpdate(Request $request, $uid) {
        $this->validate(
            $request, [
                'startup_name'=>'required',
                'founder_names'=>'required',
                'phone'=>'required',
                'email'=>'required|email',
                'city'=>'required',
                'startup_description'=>'required',
                'date_of_incorporation'=>'required',
                'no_of_staff'=>'required',
                'product_service'=>'required',
                'achievements'=>'required',
                'major_achievements'=>'required',
                'impact_of_startup'=>'required',
                'growth_plan'=>'required',
                'award_recognition'=>'required',
                'why_your_startup'=>'required',
                'list_of_social_media'=>'required',
                'contact_name'=>'required|min:10',
                'contact_email'=>'required|email',
                'contact_phone'=>'required',
                'company_registration_document_file'=>'mimes:pdf',
                'tax_registration_document_file'=>'mimes:pdf',
                'startup_logo'=>'mimes:jpeg,bmp,png',
                'startup_pitch_deck'=>'mimes:pdf,ppt,pptx',
            ]
        );

        (new AwardApplicationRepository())->update($request, $uid);
        $application = AwardApplication::where('uid', $uid)->first();
        Session::flash('success','Your Application Updated successfully. Feel free to update any content before deadline for this application');
        return redirect()->route('frontend.application.show', $application->uid);
    }

    public function contact()
    {
        return view('frontend.contact');
//                ->with('user', $user);
    }
    public function contactStore(Request $request) {
        $this->validate(
            $request, [
                'first_name'=>'required|min:3',
                'last_name'=>'required|string|min:3',
                'email'=>'required|email',
                'message'=>'required'
            ]
        );

        (new ContactRepository())->store($request);
        Session::flash('success','Your Message has been sent successfully. Thank you for getting in touch!');
        return redirect()->route('frontend.contact');
    }


    public function viewPage($slug)
    {
        $page = Page::whereSlug($slug)->first();
        if ($page) {
            return view('frontend.page')
                ->with('page', $page);
        }
        abort(404);
    }


    public function investments(Request $request)
    {
        $investments = Investment::orderBy('id', 'desc')->paginate(6);
        return view('frontend.investments', compact('investments'));
    }

    public function singleInvestment($slug) {
        $investment = Investment::where('slug', $slug)->first();
        if ($investment) {
            return view('frontend.investment_single',compact('investment'));
        }
        abort(404);
    }


    ///////////////////////////////////////////////////////////////////
    /////////////////////    DRIVER REGISTRATION //////////////////////
    ///////////////////////////////////////////////////////////////////
//    public function driverRegitration() {
//        $regions = (new RegionRepository())->all();
//        return view('frontend.driver_register')
//            ->with('regions', $regions);
//    }
//
//    public function postRegister(DriverRegistrationRequest $request) {
//        $data = $request->all();
//
//        $validator = $request->validateRequest($data,$request->rules());
//        if ($validator->fails()) {
//            return response()->json(['errors' => $validator->errors(),'success' => false]);
//        }
//
//        $format_phone_number = phone($data['phone'], $country = ['TZ'], $format = 'E164');
//
//        // check if this account exist
//        $check = $this->user->query()->where('phone', $format_phone_number)->first();
//
//        if ($check) {
//            // check id user has been registered as driver
//            $is_driver = $check->roles->where('id', 3)->first();
////            dd($is_driver,$check);
//
//            if ($is_driver) {
//                // return error to user that he has an account
//                throw new GeneralException(__('Driver Account already Exist'));
//
//            } else {
//                DB::transaction(function () use ($check) {
//
//                    $check->roles()->attach(3, ['is_approved' => 0]);
//                });
//            }
//        }
//        else {
//            DB::transaction(function () use ($data, $format_phone_number) {
//                $user = $this->user->registerDriver([
//                    'first_name' =>  $data['first_name'] ?? null,
//                    'last_name'  =>  $data['last_name'] ?? null,
//                    'email'      =>  $data['email'] ?? null,
//                    'phone'      =>  $format_phone_number,
//                    'region_id'  =>  $data['region'],
//                    'password'   =>  isset($data['password']) ? Hash::make($data['password']) : null,
//                ]);
//                $user->roles()->attach(3, ['is_approved' => 0]);
//            });
//        }
//        // todo save driver information
//    }
}
