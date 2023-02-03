<?php

namespace App\Http\Controllers;

use App\Models\InnovationProject;
use App\Models\ProjectOwner;
use App\Models\ProjectSupervisor;
use App\Models\Region;
use Illuminate\Http\Request;

class InnovProjectHandlerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('frontend.entities_projects.nationalProjects');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function projectCreatorForm()
    {
        //
        $regions = Region::pluck('name')->toArray();
        return view('frontend.entities_projects.registerProjectCreator',compact('regions'));
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
                    'gender' => ['required', 'max:255'],
        ]);
            //
            $region_id = intval($validatedData['region']);$region_id++;
            $region= Region::where('id',$region_id )->get()->first();
        $validatedData['region'] = $region['name']; 
        $ProjectCreator = ProjectOwner::create($validatedData);
        $ProjectCreator->save();
            //
        $creatorEmail = $validatedData['email']; //passing Email to Project as key for owning the project
        return view('frontend.entities_projects.registerProjectForm',compact('creatorEmail'));

        
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
                $projectDetails = InnovationProject::where('creatorEmail',$creatorEmail)->get()->first();
                $projectSupervisor = ProjectSupervisor::where('creatorEmail',$creatorEmail)->get()->first();
                $status = 'Congratulation Your Project is Registered Successful!';
                return view('frontend.entities_projects.projectOverview',compact('ownerDetails','projectDetails','projectSupervisor', 'status'));
                
            }

}
