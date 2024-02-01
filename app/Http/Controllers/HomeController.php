<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\ComplaintCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function complaints(){
        $complaints = Complaint::where('user_id',Auth::user()->id)->get();
        return view('frontend.complaints',compact('complaints'));
    }
    public function complaint(){
        $categories = ComplaintCategory::all();
        return view('frontend.complaint',compact('categories'));
    }
    public function detailComplaint($id){
        $complaint = Complaint::with('response')->where('id',$id)->first();
        return view('frontend.detail-complaint',compact('complaint'));
    }
    public function storeComplaint(Request $request){
        try {
            $complaintData = $request->except('complaint_image');
            $complaint = Complaint::create($complaintData);
            if($request->hasFile('complaint_image') && $request->file('complaint_image')->isValid()){
                $complaint->addMediaFromRequest('complaint_image')->toMediaCollection('complaint_image');
            }
            return back()->with('success', 'Data berhasil dibuat');
        } catch (\Exception $error) {
            return back()->with('error', $error->getMessage());
        }
    }
}
