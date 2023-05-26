<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\ProjectCategory;
use App\Models\ProjectOwner;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DigitalAccelerationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('frontend.acceleration.index');
    }

    /**
     * Show Forms
     
     */

# --------------- Applicant Details
    public function createForm1()
    {
        //
        $regions = Region::pluck('name','id');
        $countries = Country::pluck('name','id');
       

        $startupCategories = ProjectCategory::pluck('categoryName','id');
        return view('frontend.acceleration.accelerationForm1',
                        compact('regions','countries', 'startupCategories'));
    }
    
    # --------------- Applicant Details
     
    /**
     * Store a newly created resource in storage.
     */
    public function storeForm1(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|max:3',
            'lastName' =>'required|string|max:3',
            'phoneNumber'=>'required',
            'email'=>'required|email',
            'residenceCountry'=>'required',
            'citizenshipCountry'=>'required',            
            'startupName' => 'required|string|max:3',
            'startupCategory' => 'required|array',
            'countryOfOperation' => 'required|string|max:3',

            'region'=>'required|array',
            'startupBrief'=>'required|max:3|min:225',
        ]);

        // dd($validator);
        $regions = Region::pluck('name','id');
        $status = "Applicant's Details Saved Successfull !!!";

        return view('frontend.acceleration.accelerationForm2',compact('regions','status'));

    }
    public function storeForm2(Request $request)
    {
        //
        // $validator = Validator::make($request->all(), [
        //     'founderNumber' => 'required|integer',
        //     'ageRangeNumber' => 'required|integer',
        //     'femaleFounderNumber' => 'required|integer',

        //     'IDFile' =>'file|pdf|',

        //     'founderName1'=>'',
        //     'founderLinkedIn1'=>'',

        // ]);

        // dd($validator);
        $status = "Founder's Details Saved Successfull !!!";
        

        return view('frontend.acceleration.accelerationForm3',compact('status'));
        
    }
    public function storeForm3(Request $request)
    {
        //
        $status = "Startup's Details Saved Successfull !!!";
        return view('frontend.acceleration.accelerationForm4',compact('status'));

        
    }


    public function storeForm4(Request $request)
    {
        //
        $ownerDetails = ProjectOwner::get()->first();
        $status = "You Application is Submited Successfully";
        return view('frontend.acceleration.overView',compact('ownerDetails', 'status'));

        
    }


}
