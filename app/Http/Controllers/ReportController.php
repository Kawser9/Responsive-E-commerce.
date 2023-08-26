<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
        $productsByDate=Product::whereBetween('created_at',[$from , $to])->get();

        return view('backend.pages.reports.grtByTime',compact('productsByDate'));

    }

    public function pendingOrder()
    {
        // dd($request);
        $orders=Order::all();
        return view('backend.pages.reports.pendingOrder',compact('orders'));
    }
    public function orderStatus(Request $request)
    {
        $request->validate([
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
    ]);
        // dd($request);
        $from=$request->start_date;
        $to=$request->end_date;
        $status=$request->order_status;
        $orders=Order::where('order_status', $status)->whereBetween('created_at',[$from , $to])->get();
        // dd($orders);
        return view('backend.pages.reports.pendingOrder',compact('orders'));

    }
}
