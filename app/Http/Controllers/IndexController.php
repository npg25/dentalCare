<?php

namespace App\Http\Controllers;

use App\Models\JournalModel;
use App\Models\PriceModel;


// use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index(){
        $treatments = PriceModel::take(4)->get();

        $testimonials = JournalModel::take(4)->get();

        return view('Index', compact('treatments', 'testimonials'));
    }
    

    
}
