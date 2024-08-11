<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor as VendorModel;
use Illuminate\View\View;

class Vendor extends Controller
{
    public function show() : View
    {
        return view('admin.vendorManagement.vendorList', ['vendors' => VendorModel::all()]);
    }

    public function create(Request $request) : View
    {
        return view('admin.vendorManagement.create');
    }

    public function editView() : View
    {
        return view('admin.vendorManagement.create');
    }

    public function put(Request $request) : View
    {
        //process the update
        return view('admin.vendorManagement.create');
    }



}
