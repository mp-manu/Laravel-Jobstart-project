<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
class PhotoController extends Controller
{
    //
    public function photo(){
        $jobs = Job::with(['companies', 'types', 'locations'])
        ->get();
        
        //dd($jobs);
        return view('index', [
            'jobs' => $jobs
        ]);
    }
}
