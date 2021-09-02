<?php

namespace App\Http\Controllers;

use App\Models\FoodPackage;
use Illuminate\Http\Request;

class FoodPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package = FoodPackage::get();
        return view('admin-add-food-package',compact('package'));
        // return view('admin-add-food-package');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $package = FoodPackage::create([
            'package_name'=>$request->package_name,
            'price'=>$request->price,
        ]);
        return back()->with('message', 'Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $packages = FoodPackage::findorFail($request->packageID);
        $packages->package_name = $request->package_name;
        $packages->price = $request->price;

        $packages->update();
        return back()->with('message', 'Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $packages = FoodPackage::findorfail($id);
        $packages->delete();
        return back()->with('message', 'Successfully deleted!');
    }
}
