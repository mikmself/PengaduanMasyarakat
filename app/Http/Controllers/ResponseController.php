<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Response;
use App\Models\User;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function index(){
        $responses = Response::all();
        return view('dashboard.response.index',compact('responses'));
    }
    public function store(Request $request)
    {
        try {
            $complaintId = $request->complaint_id;
            $existingResponse = Response::where('complaint_id', $complaintId)->first();
            if ($existingResponse) {
                $existingResponse->update($request->except('status'));
            } else {
                Response::create($request->except('status'));
            }
            Complaint::where('id', $complaintId)->update([
                'status' => $request->status
            ]);
            return back()->with('success', 'Data berhasil dibuat atau diperbarui');
        } catch (\Exception $error) {
            return back()->with('error', $error->getMessage());
        }
    }

}
