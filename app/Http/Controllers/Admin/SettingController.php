<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    function index() : View
    {
        return view('admin.setting.index');
    }

    function UpdateGeneralSetting(Request $request)
    {
        dd($request->all());
    }
}
