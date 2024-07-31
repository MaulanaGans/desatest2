<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;
use App\Models\News;
use App\Models\Service;
use App\Models\Team;

class HomeControllers extends Controller
{
    public function index()
    {
        $site = Site::first();
        return view('landingpage/landingpage',[
            "site" => $site,
            "title" => $site->name,
            "news" => News::orderBy('created_at','ASC')->where('status', 'published')->limit(3)->get(),
            "services" => Service::all(),
            "teams" => Team::all()
        ]);
    }

    public function usulan()
    {
        return view('usulan',[
            "title" =>"Usulan",
        ]);
    }

}
