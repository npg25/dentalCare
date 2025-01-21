<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PriceModel;


class PriceController extends Controller
{
    public function adminPrice(){
        
        $prices = PriceModel::all();
        return view('admin.price-list', compact('prices'));
    }

    public function adminPriceCreate(){
        return view('admin.price-create');
    }
    public function adminPriceStore(Request $request ){
        $destinationPath = 'assets/images/';
        $imageExtension = $request->image->getClientOriginalExtension();
        $myImage = $request->name . '.' . $imageExtension;
        $request->image->move(public_path($destinationPath), $myImage);

        $insertPrice = PriceModel::create([
                       
            "name" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
            "category" => $request->category,
            "image" => $myImage

        ]);

        return redirect('/admin/price');        
    }

    public function adminPriceEdit($id){
        $price = PriceModel::find($id);
        return view('admin.price-detail', compact('price'));

    }
    
    public function adminPriceUpdate(Request $request, $id){
        $updatePost = PriceModel::find($id);
        $destinationPath = 'assets/images/';

        if ($request->hasFile('image')) {
            $imageExtension = $request->image->getClientOriginalExtension();
            $myImage = $request->name . '.' . $imageExtension;
            $request->image->move(public_path($destinationPath), $myImage);
            
            $updatePost->image = $myImage;
        }
        
        $updatePost->update([
            "name" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
            "category" => $request->category,
            "image" => $updatePost->image
        ]);

        if ($updatePost){
            return redirect('/admin/price/'.$updatePost->id);
        }
        return back()->with('error', 'Failed to update the price.');

    }


    public function adminPriceDelete($id){
        $deletePrice = PriceModel::find($id);
        $deletePrice->delete();

        return redirect('/admin/price');        


    }
}
