<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index()
    {
        // 1. Data untuk Chart (7 Hari Terakhir)
        $days = collect(range(6, 0))->map(function($i) {
            return now()->subDays($i)->format('Y-m-d');
        });

        $visitData = DB::table('shetabit_visits')
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
            ->where('created_at', '>=', now()->subDays(6))
            ->groupBy('date')
            ->get()
            ->pluck('count', 'date');

        $chartData = $days->map(fn($date) => $visitData->get($date, 0));
        $chartLabels = $days->map(fn($date) => date('d M', strtotime($date)));

        // 2. Data untuk Tabel (Terbaru)
        $visitors = DB::table('shetabit_visits')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.visitors.index', compact('visitors', 'chartLabels', 'chartData'));
    }
}