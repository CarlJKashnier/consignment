<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Vendor as VendorModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class Vendor extends Controller
{
    public function show(): View
    {
        return view('admin.vendorManagement.vendorList', ['vendors' => VendorModel::all()]);
    }

    public function create(Request $request): View
    {
        $vendorData = new VendorModel();
        return view('admin.vendorManagement.create', ['vendorData' => $vendorData]);
    }

    public function editView($vendorId): View
    {
        $vendorData = VendorModel::where('id', '=', $vendorId)->first()->toArray();
        return view('admin.vendorManagement.create', ['vendorData' => $vendorData]);
    }

    public function put(Request $request): RedirectResponse
    {
        //process the update

        //Do clever validation stuff here

        //End doing clever validation stuff.
        $new = 0;
        if(is_int((int)$request->id) && $request->id) {
            $vendorToUpdate = VendorModel::where('id', '=', $request->id)->first();
        } else {
            $vendorToUpdate = new VendorModel;
            $vendorToUpdate->owned_by_client_id = Auth::user()->client_id;
            $new = 1;
        }
        foreach ($request->request->all() as $key => $value) {
            if ((isset($vendorToUpdate->$key) || $new) && $key != 'id' && $key != '_token') {
                $vendorToUpdate->$key = $value;
            }
        }

        $vendorToUpdate->save();
        if($new){
            return redirect()->to('/vendor/edit/'.$vendorToUpdate->id);
        }
        return redirect()->back();
//        return view('admin.vendorManagement.create');
    }


}
