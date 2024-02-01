<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $admins = User::where('level','admin')->get();
        return view('dashboard.admin.index',compact('admins'));
    }
    public function create(){
        return view('dashboard.admin.create');
    }
    public function store(Request $request)
    {
        try {
            $request->merge([
                'password' => Hash::make($request->password),
                'level' => 'admin'
            ]);
            User::create($request->all());
            return back()->with('success', 'Data berhasil dibuat');
        } catch (\Exception $error) {
            return back()->with('error', $error->getMessage());
        }
    }

    public function edit($id){
        $admin = User::find($id);
        if (!$admin) {
            return back()->with('error', 'Data tidak ditemukan');
        }
        return view('dashboard.admin.edit',compact('admin'));
    }
    public function update($id,Request $request){
        try {
            $admin = User::find($id);
            if (!$admin) {
                return back()->with('error', 'Data tidak ditemukan');
            }
            $admin->update($request->all());
            return back()->with('success', 'Data berhasil diubah');
        }catch (\Exception $error){
            return back()->with('error',$error->getMessage());
        }
    }
    public function destroy($id){
        try {
            $admin = User::find($id);
            if (!$admin) {
                return back()->with('error', 'Data tidak ditemukan');
            }
            $admin->delete();
            return back()->with('success','Data berhasil dihapus');
        }catch (\Exception $error){
            return back()->with('error',$error->getMessage());
        }
    }
}
