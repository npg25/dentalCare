<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JournalModel;

class JournalController extends Controller
{
     public function adminJournal(){
        
        $journals = JournalModel::all();
        return view('admin.journal', compact('journals'));

    }

    public function adminJournalCreate(){
        return view('admin.journal-create');
    }
    public function adminJournalStore(Request $request ){
        $destinationPath = 'assets/images/';

        $beforeExtension = $request->before->getClientOriginalExtension();
        $myImage1 = $request->patient_name . '_before.' . $beforeExtension;
        $request->before->move(public_path($destinationPath), $myImage1);

        $afterExtension = $request->after->getClientOriginalExtension();
        $myImage2 = $request->patient_name . '_after.' . $afterExtension;
        $request->after->move(public_path($destinationPath), $myImage2);

        $insertPrice = JournalModel::create([
            "patient_name" => $request->patient_name,
            "issue" => $request->issue,
            "treatment" => $request->treatment,
            "before" => $myImage1,
            "after" => $myImage2
        ]);

        return redirect('/admin/journal');        
    }


    public function adminJournalEdit($id){
        $journals = JournalModel::find($id);
        return view('admin.journal-detail', compact('journals'));

    }
    
    public function adminJournalUpdate(Request $request, $id){
        $updatePost = JournalModel::find($id);
        $destinationPath = 'assets/images/';
        
        if ($request->hasFile('before') ){
            $beforeExtension = $request->file('before')->getClientOriginalExtension();
            $myImage1 = $request->patient_name . '_before.' . $beforeExtension;
            $request->file('before')->move(public_path($destinationPath), $myImage1);
            $updatePost->before = $myImage1;              
        }

        if($request->hasFile('after')){
            $afterExtension = $request->file('after')->getClientOriginalExtension();
            $myImage2 = $request->patient_name . '_after.' . $afterExtension;
            $request->file('after')->move(public_path($destinationPath), $myImage2);
            $updatePost->after = $myImage2;
        }
        
            $updatePost->update([
                "patient_name" => $request->patient_name,
                "issue" => $request->issue,
                "treatment" => $request->treatment,
                "before" => $updatePost->before,
                "after" => $updatePost->after
            ]);

        if ($updatePost){
            return redirect('/admin/journal/'.$updatePost->id.'');

        }
        return back()->with('error', 'Failed to update the price.');

    }

    public function adminJournalDelete($id){
        $deleteJournal = JournalModel::find($id);
        $deleteJournal->delete();

        return redirect('/admin/journal');        
    }
}
