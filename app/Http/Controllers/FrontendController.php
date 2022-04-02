<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Http\Resources\FeatureResource;
use App\Http\Resources\ThemeResource;
use App\Models\Feature;
use App\Models\Invitation\Invite;
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

    public function undangan($slug)
    {
        $data = Invite::where('subdomain', $slug)->first();
        // dd($data->event);
        return view('themes.' . $data->theme, [
            "data" => $data,
        ]);
    }

    public function sendComment(Request $request, $data)
    {
        $data = Invite::where('subdomain', $data)->first();
        $data->comments()->create([
            'nama' => "request->nama",
            'komentar' => $request->komentar,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Komentar berhasil dikirim',
        ]);
    }

    public function dataComment($data)
    {
        $data = Invite::where('subdomain', $data)->first();
        return CommentResource::collection($data->comments()->get());
    }
}
