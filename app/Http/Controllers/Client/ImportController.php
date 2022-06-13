<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Imports\ProductImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function ExcelImport()
    {
        return view("admin.import");
    }
    public function SaveData(Request $request){
       $file = $request->file("data");
       Excel::import(new ProductImport,$file->store("temp"));
       return redirect()->back();
    }
}
