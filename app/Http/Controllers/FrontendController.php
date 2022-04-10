<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Http\Resources\FaqResource;
use App\Http\Resources\FeatureResource;
use App\Http\Resources\ThemeResource;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\Invitation\Invite;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        $s = Validator::make($request->all(), [
            'komentar' => 'required',
        ]);

        if ($s->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $data->getMessageBag(),
                'messages' => "Pesan tidak boleh kosong",
            ]);
        } else {
            $data = Invite::where('subdomain', $data)->first();
            $data->comments()->create([
                'nama' => $request->nama,
                'komentar' => $request->komentar,
            ]);
            return response()->json(
                [
                    'status' => 200,
                    'messages' => "Pesan berhasil dikirim",
                ],
            );
        }
    }

    public function dataComment($data)
    {
        $data = Invite::where('subdomain', $data)->first();
        return CommentResource::collection($data->comments()->get());
    }

    public function dataFaq()
    {
        return FaqResource::collection(Faq::all());
    }

    public function why()
    {
        $data = [
            [
                "title" => "Mudah dan Murah",
                "description" => " Hanya perlu waktu 5 menit untuk membuat website undangan 
                pernikahan online menggunakan undanganmo. Anda bisa mencobanya secara gratis dan websitemu akan aktif hingga 1 tahun kedepan"
            ],
            [
                "title" => "Banyak Pilihan Tema",
                "description" => "Tersedia banyak pilihan tema yang bisa di sesuaikan dengan selera Anda. Masih kurang? tenang, kami juga memiliki layanan untuk permintaan tema eksklusif.",
            ],
            [
                "title" => "Tim Support Responsif",
                "description" => "Tidak perlu menunggu lama, selesaikan masalah Anda dengan cepat secara real time melalui live chat whatsapp bersama tim support kami.",
            ],
        ];

        return response()->json([
            "data" => $data
        ]);
    }
}
