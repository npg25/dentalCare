<?php

namespace App\Http\Controllers\admin;
// use App\Models\PriceModel;
// use App\Models\JournalModel;
use Illuminate\Http\Request;



use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class adminController extends Controller
{
    public function adminIndex(){
        if (!auth()){
            return abort('404');    
        }else {
        return view('admin.index');

        }

    }

        
}
