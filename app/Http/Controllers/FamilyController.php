<?php

namespace App\Http\Controllers;

use App\Family;
use Illuminate\Http\Request;
use App\Http\Requests\FamilyRequest;

class FamilyController extends Controller
{
    public function store(FamilyRequest $request)
    {
        Family::create($request->post());

        return redirect()->route('household.store');
    }
}
