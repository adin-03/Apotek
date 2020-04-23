<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        $total = DB::table('transaksis')->select(DB::raw("SUM(stok) as count"))->groupBy('id_obat')->get();
        $datas = Transaksi::all();
        return view('pages.admin.dashboard', compact(['datas', 'total']));
    }
}
