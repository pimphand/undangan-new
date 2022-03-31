<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\ContactImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(Request $request)
    {
        $data = \Location::get();
        dd($data);
    }

    public function import(Request $request)
    {
        $data = Excel::import(new ContactImport, $request->file);

        dd($data);
        return redirect()->back()->with('success', 'Data berhasil diimport!');
    }
}
