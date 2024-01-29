<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ServiceCategory, Service};
use Auth;
class VendorController extends Controller
{
    public function index()
    {
        try {
            //Related to transactions
          $serviceCategories = ServiceCategory::all();
          $services = Service::where('user_id',Auth::id())->get();

            return view('vendor-user.index', compact('serviceCategories','services'));
        } catch (\Exception $exception) {
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    public function Profile()
    {
        return view("vendor-user.profile");
    }
    public function Payments()
    {
        return view("vendor-user.paymentTransaction");
    }
  
    public function addService(Request $request)
    {
        $upload_media = '';
        if($request->file('upload_media'))
        {
            $serviceFilePath = serviceFilePath();
            $upload_media = saveFile($serviceFilePath,$request->upload_media);
        }
        $addService = new Service;
        $addService->title = $request->title;
        $addService->description = $request->description;
        $addService->price = $request->price;
        $addService->upload_media = $upload_media;
        $addService->service_category_id = $request->service_category_id;
        $addService->user_id = Auth::id();
        if($addService->save())
        {
            return redirect()->back()->with('status','Service Saved Successfully');
        }

    public function Dashboard()
    {
        return view("vendor-user.dashboard");
    }
}
