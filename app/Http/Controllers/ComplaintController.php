<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\ComplaintCategory;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index(){
        $complaints = Complaint::all();
        return view('dashboard.complaint.index',compact('complaints'));
    }
    public function show($id){
        $complaint = Complaint::find($id);
        return view('dashboard.complaint.show',compact('complaint'));
    }
    public function destroy($id){
        try {
            $complaint = Complaint::find($id);
            if (!$complaint) {
                return back()->with('error', 'Data tidak ditemukan');
            }
            $complaint->delete();
            return back()->with('success','Data berhasil dihapus');
        }catch (\Exception $error){
            return back()->with('error',$error->getMessage());
        }
    }
}
