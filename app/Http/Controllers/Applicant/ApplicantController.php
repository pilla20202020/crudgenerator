<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form4\Recommendationfoodindustryestablishment;
use App\Models\Form7\Newlicenseissue;


class ApplicantController extends Controller
{
    public function dashboard()
    {
        $newregistration = Recommendationfoodindustryestablishment::where('consumer_id',auth()->user()->id)->first() ?? null;
        $newlisence = Newlicenseissue::where('consumer_id',auth()->user()->id)->first() ?? null;
        // dd($newregistration,$newlisence);

        return view('consumer.dashboard',compact('newregistration','newlisence'));
    }
}
