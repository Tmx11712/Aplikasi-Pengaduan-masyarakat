<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Society;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
   public function index()
{
    $data['complaints'] = Complaint::count();
    $data['unprocessed'] = Complaint::where('status', '0')->count();
    $data['process'] = Complaint::where('status', 'process')->count();
    $data['finished'] = Complaint::where('status', 'finished')->count();
    $data['users'] = User::count();
    $data['society'] = Society::count();

    // === DATA Grafik ======================================
    $data['tahun'] = Complaint::selectRaw('YEAR(created_at) as Tahun, COUNT(*) as pay_total')
        ->groupBy('Tahun')
        ->orderBy('Tahun')
        ->get();

    $th = [];
    $complaint1 = [];

    foreach ($data['tahun'] as $row) {
        $th[] = $row->Tahun;
        $complaint1[] = $row->pay_total;
    }

    $data['th'] = $th;
    $data['complaint1'] = $complaint1;
    // ========================================================

    return view('admin.dashboards.index', $data);
}

    public function welcome()
    {
        return view('frontend.home.index');
    }
}
