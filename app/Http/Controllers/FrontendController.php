<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {

        return view('welcome', [
            "themes" => Theme::all()
        ]);
    }

    public function demo($id)
    {
        return view('themes.' . $id);
    }
}
