<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Models\Registration;
use Illuminate\Http\Request;

class EntityRegisteringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entities = Registration::all();
        return view('backend.entities.index',compact('entities'));
    }



    public function show($id)
    {
        $requestedEntity = Registration::where('id', $id)->first();
        $region = Region::where('id', $requestedEntity->region_id)->first();
        $region = $region['name'];        
        return view('backend.entities.showEntity',compact('requestedEntity','region'));

    }
}
