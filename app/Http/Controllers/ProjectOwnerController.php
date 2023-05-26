<?php

namespace App\Http\Controllers;

use App\Models\ProjectOwner;
use Illuminate\Http\Request;

class ProjectOwnerController extends Controller
{
    public function index(){

        return ProjectOwner::all();

    }

    public function createOwner(){

        return '';

    }
    
}
