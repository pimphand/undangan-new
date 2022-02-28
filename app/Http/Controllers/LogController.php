<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    static function log(Request $request)
    {
        Log::create([
            "user_id" => 1,
            "browsher" => "browsher",
            "ip_address" => "ip_address",
            "action" => "action",
            "url" => "url",
            "method" => "method",
            "device" => "device",
            "os" => "os",
        ]);
    }
}
