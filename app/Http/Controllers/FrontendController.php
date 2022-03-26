<?php

namespace App\Http\Controllers;

use App\Http\Resources\ThemeResource;
use App\Models\Theme;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function demo($id)
    {
        return view('themes.' . $id);
    }

    public function getData()
    {
        return ThemeResource::collection(Theme::all());
    }
}
