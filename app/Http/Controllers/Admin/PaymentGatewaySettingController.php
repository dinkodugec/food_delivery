<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentGatewaySettingController extends Controller
{
    public function index()
    {
        //  code to handle the index action
        return view('admin.payment-setting.index');
    }
}
