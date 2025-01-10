<?php

namespace App\Http\Controllers;
use App\Models\Langdingpage;
use App\Models\Video;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    //
    public function index()
    {
        
        $landingpage = Landingpage::where('status', 1)->orderBy('order','asc')->get(); 
        $video = Video::orderBy('id','asc')->get();
        return view('user.index', compact('landingpagea','video'));
    }
}
