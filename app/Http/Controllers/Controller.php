<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
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

            return $next($request);
        });
    }
}
