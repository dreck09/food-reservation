<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Food;
use Illuminate\Support\Facades\File;

class FoodController extends Controller
{
   
    public function index(Request $request)
    {
        $foods = Food::get();
        return view('admin-add-food',compact('foods'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image'         => 'nullable|image|file|max:5000',
            'food_title'    => 'required|unique:food',
        ]);

        if($request->hasFile('image'))
        {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/foods_image',$fileNameToStore);
        }
        else
        {
            $fileNameToStore = 'noimage.png';
        }
        $foods = Food::create([
            'food_title' => $request->food_title,
            'description' => $request->description,
            'price' => $request->price,
            'categories' => $request->categories,
            'image' => $fileNameToStore,
        ]);
        return back()->with('message', 'Successfully Added!');
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'image'         => 'nullable|image|file|max:5000',
        ]);
        
        $food = Food::findorFail($request->foodID);
        $food->food_title = $request->food_title;
        $food->description = $request->description;
        $food->price = $request->price;
        $food->categories = $request->categories;
        if($request->hasFile('image'))
        {
            $location = 'public/foods_image'.$food->image;
            if(File::exists($location))
            {
                File::delete($location);
            }
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/foods_image',$fileNameToStore);
            $food->image = $fileNameToStore;
        }
        $food->update();
        return back()->with('message', 'Successfully Updated!');
    }

    public function destroy($id)
    {
        //
    }
}
