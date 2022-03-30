<?php

namespace App\Http\Controllers;

use App\Http\Resources\FeatureResource;
use App\Http\Resources\ThemeResource;
use App\Models\Feature;
use App\Models\Theme;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('welcome', [
            "features" => FeatureResource::collection(Feature::all()),
        ]);
    }

    public function demo($id)
    {
        return view('themes.' . $id);
    }

    public function tema()
    {
        return ThemeResource::collection(Theme::all());
    }

    public function feature()
    {
        return FeatureResource::collection(Feature::all());
    }
}
