<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use Auth;
class ServiceCategoryController extends Controller
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
        $create = ServiceCategory::create([
          'name' => $request->name,
          'user_id'=>Auth::id()
        ]);
        return redirect()->back()->with('status','Category Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categoryDetails = ServiceCategory::find($id);
         return response()->json([
            "status" => true, 
            "categoryDetails" => $categoryDetails
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoryDetails = ServiceCategory::find($id);
        $categoryDetails->name = $request->name;
        if($categoryDetails->save())
        {
            return redirect()->back()->with('status','Category Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categoryDetails = ServiceCategory::find($id);
        if($categoryDetails->delete())
        {
            return redirect()->back()->with('delete','Category Deleted Successfully');
        }
    }
}
