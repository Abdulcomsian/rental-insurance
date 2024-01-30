<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ServiceCategory, Service};
use Auth;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $serviceDetails = Service::find($id);
        return response()->json([
         'status'=>true,
         'serviceDetails'=>$serviceDetails
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
     
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateService = Service::find($id);
        $upload_media = $updateService->upload_media ?? '';
        if($request->file('upload_media'))
        {
            $serviceFilePath = serviceFilePath();
            $upload_media = saveFile($serviceFilePath,$request->upload_media);
        }
        $updateService->title = $request->title;
        $updateService->description = $request->description;
        $updateService->price = $request->price;
        $updateService->upload_media = $upload_media;
        $updateService->service_category_id = $request->service_category_id;
        $updateService->user_id = Auth::id();
        if($updateService->save())
        {
            return redirect()->back()->with('status','Service Saved Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        if($service->delete())
        {
            return redirect()->back();
        }
    }
}
