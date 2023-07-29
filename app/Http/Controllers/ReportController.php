<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reportList()
    {
        return view('backend.pages.reports.list');
    }

    public function getByTimeReport()
    {
        return view('backend.pages.reports.grtByTime');
    }

    public function searchByTime(Request $request)
    {
        $request->validate([
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
    ]);
        // dd($request);
        $from=$request->start_date;
        $to=$request->end_date;
        $brand=$request->brand_id;
        $productsByDate=Product::where('brand_id', $brand)->whereBetween('created_at',[$from , $to])->get();

        return view('backend.pages.reports.grtByTime',compact('productsByDate'));

    }
}
