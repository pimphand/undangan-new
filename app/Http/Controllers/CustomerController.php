<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ContactImport;
use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
{
    public function import(Request $request)
    {
        $data = Excel::import(new ContactImport, $request->file);

        dd($data);
        return redirect()->back()->with('success', 'Data berhasil diimport!');
    }

    public function history()
    {
        return view('customer.history');
    }
}
