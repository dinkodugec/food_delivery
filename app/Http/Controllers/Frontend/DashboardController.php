<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\DeliveryArea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() : View
    {
        $deliveryAreas = DeliveryArea::where('status', 1)->get();
        return view('frontend.dashboard.index', compact('deliveryAreas'));
    }

    
    function createAddress(Request $request)
    {
        dd($request->all());
    }

}
