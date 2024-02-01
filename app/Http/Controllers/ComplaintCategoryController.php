<?php

namespace App\Http\Controllers;

use App\Models\ComplaintCategory;
use Illuminate\Http\Request;

class ComplaintCategoryController extends Controller
{
    public function index(){
        $complaintCategories = ComplaintCategory::all();
        return view('dashboard.complaint-category.index',compact('complaintCategories'));
    }
    public function create(){
        return view('dashboard.complaint-category.create');
    }
    public function store(Request $request){
        try {
            ComplaintCategory::create($request->all());
            return back()->with('success', 'Data berhasil dibuat');
        } catch (\Exception $error) {
            return back()->with('error', $error->getMessage());
        }
    }
    public function edit($id){
        $complaintCategory = ComplaintCategory::find($id);
        if (!$complaintCategory) {
            return back()->with('error', 'Data tidak ditemukan');
        }
        return view('dashboard.complaint-category.edit',compact('complaintCategory'));
    }
    public function update($id,Request $request){
        try {
            $complaintCategory = ComplaintCategory::find($id);
            if (!$complaintCategory) {
                return back()->with('error', 'Data tidak ditemukan');
            }
            $complaintCategory->update($request->all());
            return back()->with('success', 'Data berhasil diubah');
        }catch (\Exception $error){
            return back()->with('error',$error->getMessage());
        }
    }
    public function destroy($id){
        try {
            $complaintCategory = ComplaintCategory::find($id);
            if (!$complaintCategory) {
                return back()->with('error', 'Data tidak ditemukan');
            }
            $complaintCategory->delete();
            return back()->with('success','Data berhasil dihapus');
        }catch (\Exception $error){
            return back()->with('error',$error->getMessage());
        }
    }
}
