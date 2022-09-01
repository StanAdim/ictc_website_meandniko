<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Leader;

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
            return view('frontend.index')
                ->with('SliderBanners', $SliderBanners)
                ->with('leaders', $leaders);
    }

    public function about()
    {
            return view('frontend.about');
//                ->with('user', $user);
    }

    public function news()
    {
//        $user = access()->user();
            return view('frontend.news');
//                ->with('user', $user);
    }
    public function contact()
    {
//        $user = access()->user();
            return view('frontend.contact');
//                ->with('user', $user);
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
