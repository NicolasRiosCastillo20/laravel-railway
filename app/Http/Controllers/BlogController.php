<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Experience;

class BlogController extends Controller
{
    public function index()
    {
        $isAdminPanel = false;
        $services = Service::take(3)->get();
        $experiences = Experience::take(3)->get();
        return view('blog.index', compact('isAdminPanel', 'services', 'experiences'));
    }


    public function getServices()
    {
        $isAdminPanel = false;
        $services = Service::all();
        return view('blog.services', compact('isAdminPanel', 'services'));
    }


    public function getLongDescription($idService)
    {
        $isAdminPanel = false;
        $service = Service::where('id', $idService)->first();
        return view('blog.descriptionService', compact('isAdminPanel', 'service'));
    }

    public function getExperiences()
    {
        $isAdminPanel = false;
        $experiences = Experience::all();
        return view('blog.experiences', compact('isAdminPanel', 'experiences'));
    }
}
