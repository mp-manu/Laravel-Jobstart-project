<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Location;
use App\Models\JobType;
use App\Models\Company;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class NewPostController extends Controller
{
    //
    public function newpost(){
        $locations = Location::all();
        $jobTypes = JobType::all();
        $companies = Company::all();

        return view('new-post', [
            'locations' => $locations, 
            'types'     => $jobTypes, 
            'companies' => $companies
        ]);
    }

    public function create(Request $request){
        Job::create($request->all());
        Session::put('success', 'Успешно сохранен!');
        return redirect('/new-post');
    }
}
