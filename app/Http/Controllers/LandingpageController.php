<?php

namespace App\Http\Controllers;
use App\Models\Landingpages;
use App\Models\Video;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    //
    public function index()
    {
        $landingpage = Landingpages::where('status', 1)->orderBy('order','asc')->get(); 
        $video = Video::orderBy('id','asc')->get();
        return view('user.index', compact('landingpage','video'));
    }
}