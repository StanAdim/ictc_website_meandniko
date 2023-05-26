<?php

namespace App\Http\Controllers;

use App\Http\Resources\projects\InnovProjectResource;
use App\Models\InnovationProject;
use App\Models\ProjectOwner;
use App\Models\ProjectSupervisor;
use App\Models\Region;
use App\Models\Registration;
use Illuminate\Http\Request;

class InnovationProjectController extends Controller
{
    //
    public function showProjects(){

        return InnovProjectResource::collection(InnovationProject::all()) ;

    }   


    public function index(){
        $projects = InnovProjectResource::collection(InnovationProject::all());
        return view('backend.projects.index', compact('projects'));
    }

    public function creatorsList(){
        $creators = ProjectOwner::all();

        return view('backend.projects.creators', compact('creators'));
    }

    public function supervisorsList(){
        $supervisors = ProjectSupervisor::all();

        return view('backend.projects.supervisors', compact('supervisors'));
    }


}
