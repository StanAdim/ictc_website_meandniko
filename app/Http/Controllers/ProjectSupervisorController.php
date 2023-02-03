<?php

namespace App\Http\Controllers;

use App\Models\ProjectSupervisor;
use Illuminate\Http\Request;

class ProjectSupervisorController extends Controller
{
    public function index(){

        return ProjectSupervisor::all();

    }


    public function createSupervisor(){

        return '';
    }




}
