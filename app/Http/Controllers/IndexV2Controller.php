<?php

namespace App\Http\Controllers;

use App\Models\JournalModel;
use App\Models\PriceModel;


// use Illuminate\Http\Request;

class IndexV2Controller extends Controller
{
    public function IndexV2(){
        $treatments = PriceModel::take(4)->get();

        $testimonials = JournalModel::take(4)->get();

        return view('IndexV2', compact('treatments', 'testimonials'));
    }
    

    
}
