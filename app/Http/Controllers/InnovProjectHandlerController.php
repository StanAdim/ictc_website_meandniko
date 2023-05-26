<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\InnovationProject;
use App\Models\ProjectCategory;
use App\Models\ProjectOwner;
use App\Models\ProjectSupervisor;
use App\Models\Region;
use App\Models\Registration;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\ElseIf_;

class InnovProjectHandlerController extends Controller
{
  
    public function indexProject()
    {
        //
        return view('frontend.entities_projects.indexProject');
    }

    public function indexStartup()
    {
        //
        return view('frontend.entities_projects.indexStartup');
    }
  
    public function InnovationProjects()
    {
        //
        $projects = InnovationProject::orderBy('id', 'desc')->get();
        $regions = Region::all(); 
        $categories = ProjectCategory::all(); 
        return view('frontend.entities_projects.nationalProjects',compact('projects','regions','categories'));
    }

    public function nationalEntities()
    {
        //
        $entities = Registration::orderBy('id', 'desc')->get();
        $regions = Region::all();    
        return view('frontend.entities_projects.nationalStartups',compact('entities','regions'));
    }
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    public function projectCreatorForm()
    {
        //
        $regions = Region::pluck('name')->toArray();
        return view('frontend.entities_projects.registerProjectCreator',compact('regions'));
    } 

    public function districtRequest($regionId)
    {
        $regionId = $regionId + 1;
        if($regionId <=32){
             //getting districts for passed region
        $region = Region::where('id', $regionId)->first();
        $region = $region['name'];
        $districts = District::where('region', $region)->get();
        return response()->json($districts);
        }
        else{
            return '';
        }
    } 
    public function entitiesDistrictRequest($regionId)
    {
        if($regionId <=32){
             //getting districts for passed region
        $region = Region::where('id', $regionId)->first();
        $region = $region['name'];
        $districts = District::where('region', $region)->get();
        return response()->json($districts);
        }
        else{
            return '';
        }
    } 

     
    public function projectCreatorStore(Request $request)
    {
        //
        $validatedData = $request->validate([
                    'firstName' => ['required', 'max:255'],
                    'secondName' => ['required', 'max:255'],
                    'email' => ['required', 'max:255'],
                    'phoneNumber' => ['required', 'max:255'],
                    'dob' => ['required', 'max:255'],
                    'nationality' => ['required', 'max:255'],
                    'region' => ['required', 'max:255'],
                    'district' => ['required', 'max:255'],
                    'gender' => ['required', 'max:255'],
        ]);
            //
            $region_id = intval($validatedData['region']);$region_id++;
            $region= Region::where('id',$region_id )->get()->first();
        $validatedData['region'] = $region['name']; 
        $ProjectCreator = ProjectOwner::create($validatedData);
        $ProjectCreator->save();
            //
        $projectCategories = ProjectCategory::pluck('categoryName')->toArray();
        $creatorEmail = $validatedData['email']; //passing Email to Project as key for owning the project
        return view('frontend.entities_projects.registerProjectForm',compact('creatorEmail','projectCategories'));

        
    }

      
     
    public function projectStore(Request $request)
            {
                //
                $validatedData = $request->validate([
                            'category' => ['required'],
                            'institution' => ['required', 'max:255'],
                            'title' => ['required'],
                            'year' => ['required','numeric'],
                            'type' => ['required'],
                            'brief' => ['required'],
                            'requiredSupport' => ['required'],
                            'isNominated' => ['required', 'max:255'],

                            'creatorEmail' => ['required'],
                ]);            //
                $project = InnovationProject::create($validatedData);
                $project->save();
                $creatorEmail = $validatedData['creatorEmail']; //passing Email to Project as key for owning the project
                $regions = Region::pluck('name', 'id')->toArray();
                return view('frontend.entities_projects.registerProjectSupervisor',compact('creatorEmail', 'regions'));

                
            }  
    public function projectSupervisorStore(Request $request)
            {
                
                $validatedData = $request->validate([
                    'firstName' => ['required', 'max:255'],
                    'secondName' => ['required', 'max:255'],
                    'email' => ['required', 'max:255'],
                    'phoneNumber' => ['required', 'max:255'],
                    'fieldExperties' => ['required', 'max:255'],
                    'nationality' => ['required', 'max:255'],
                    'creatorEmail' => ['required'],
                    
                ]); 
                

                $projectSupervisor = ProjectSupervisor::create($validatedData);
                $projectSupervisor->save();

                $creatorEmail = $validatedData['creatorEmail'];
                $ownerDetails = ProjectOwner::where('email',$creatorEmail)->get()->first();
                $region = $ownerDetails['region'];
                $categories = ProjectCategory::all(); 
                $projectDetails = InnovationProject::where('creatorEmail',$creatorEmail)->get()->first();
                $projectSupervisor = ProjectSupervisor::where('creatorEmail',$creatorEmail)->get()->first();
                $status = 'Congratulation Your Project is Registered Successful!';
                return view('frontend.entities_projects.projectOverview',compact('ownerDetails','projectDetails','projectSupervisor', 'status','categories'));
                
            }

}
