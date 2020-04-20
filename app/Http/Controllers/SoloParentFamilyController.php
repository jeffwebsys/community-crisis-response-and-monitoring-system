<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Family;
use App\Http\Requests\SoloParentFamilyRequest;
class SoloParentFamilyController extends Controller
{
    //

public function store(SoloParentFamilyRequest $request){


Family::create($request->post());


}




}
