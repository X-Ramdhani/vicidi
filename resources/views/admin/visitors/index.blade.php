@extends('layouts.admin')

@section('title', 'Statistik Pengunjung')

@section('content')
    <div x-data="{}" x-init="initChart()">
        <div class="mb-8">
            <h2 class="text-xl md:text-2xl font-extrabold text-[#0f172a]">Analitik Pengunjung</h2>
            <p class="text-slate-500 text-sm">Pantau trafik real-time platform kamu.</p>
        </div>

        <div class="bg-white border border-slate-100 rounded-2xl shadow-sm p-6 mb-8">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-bold text-slate-700">Tren Kunjungan (7 Hari Terakhir)</h3>
                <span class="text-xs bg-blue-50 text-blue-600 px-3 py-1 rounded-full font-bold">Live Data</span>
            </div>
            <div class="h-[300px] w-full">
                <canvas id="visitorChart"></canvas>
            </div>
        </div>

        <div class="bg-white border border-slate-100 rounded-2xl shadow-sm overflow-hidden">
            <div class="px-6 py-4 border-b border-slate-100 bg-slate-50/50">
                <h3 class="font-bold text-slate-700">Log Kunjungan Terbaru</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse min-w-[800px]">
                    <thead class="bg-slate-50 border-b border-slate-100">
                        <tr>
                            <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider">Waktu</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider">IP & Lokasi</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider">Platform /
                                Browser</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider">Halaman URL</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse ($visitors as $v)
                            <tr class="hover:bg-slate-50/50 transition">
                                <td class="px-6 py-4 text-sm text-slate-600">
                                    {{ \Carbon\Carbon::parse($v->created_at)->diffForHumans() }}
                                    <div class="text-[10px] text-slate-400">{{ $v->created_at }}</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm font-bold text-slate-700">{{ $v->ip }}</div>
                                    <div class="text-[10px] text-blue-500 font-mono">
                                        {{ $v->method }} • {{ $v->device ?: 'Unknown Device' }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center space-x-2">
                                        <span
                                            class="px-2 py-1 bg-slate-100 rounded text-[10px] font-bold text-slate-600 uppercase">{{ $v->platform }}</span>
                                        <span class="text-xs text-slate-500">{{ $v->browser }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div
                                        class="text-xs text-slate-600 line-clamp-1 max-w-xs bg-slate-50 p-1 rounded border border-slate-100">
                                        {{ $v->url }}
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-10 text-center text-slate-400 italic">Belum ada data
                                    kunjungan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="px-6 py-4 bg-slate-50 border-t border-slate-100">
                {{ $visitors->links() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        function initChart() {
            const ctx = document.getElementById('visitorChart').getContext('2d');

            // Gradient effect
            const gradient = ctx.createLinearGradient(0, 0, 0, 300);
            gradient.addColorStop(0, 'rgba(37, 99, 235, 0.2)');
            gradient.addColorStop(1, 'rgba(37, 99, 235, 0)');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: {!! json_encode($chartLabels) !!},
                    datasets: [{
                        label: 'Total Kunjungan',
                        data: {!! json_encode($chartData) !!},
                        borderColor: '#2563eb',
                        borderWidth: 3,
                        fill: true,
                        backgroundColor: gradient,
                        tension: 0.4,
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#2563eb',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        pointHoverRadius: 6
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                borderDash: [5, 5],
                                color: '#e2e8f0'
                            },
                            ticks: {
                                stepSize: 1
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        }
    </script>
@endpush
