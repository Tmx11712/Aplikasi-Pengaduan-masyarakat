<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Response;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        $data['complaints'] = Complaint::all();
        return view('admin.complaints.index', $data);
    }
    public function show($id)
    {
        $data['complaint'] = Complaint::findOrFail($id);
        $data['response'] = Response::where('complaint_id', $id)->first();
        return view('admin.complaints.show', $data);
    }
    public function destroy($id)
    {
        $complaint = Complaint::findOrFail($id);
        $complaint->delete();

        return redirect()->back()->with('success', 'Complaint deleted successfully.');
    }
}
