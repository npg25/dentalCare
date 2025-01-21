<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\PriceModel;

class CatalogController extends Controller
{
    public function CatalogIndex(){
        $catalogs = PriceModel::all();
        return view('catalog', compact('catalogs'));
    }

   
}
