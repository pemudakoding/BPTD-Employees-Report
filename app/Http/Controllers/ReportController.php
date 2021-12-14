<?php

namespace App\Http\Controllers;

use App\Actions\Report\{StoreReport, GetReport};
use App\Models\ActivityReport;
use Illuminate\Http\Request;
use App\Http\Requests\{StoreReportRequest};

class ReportController extends Controller
{

    public function __construct()
    {
    }

    public function index(GetReport $report)
    {
        $this->authorize('viewAny', ActivityReport::class);
        $reports = $report->getAllReport();

        return view('pages.report.index', compact('reports'));
    }

    public function create()
    {
        $this->authorize('create', ActivityReport::class);
        return view('pages.report.create');
    }

    public function edit()
    {
        $this->authorize('viewAny', ActivityReport::class);
        return view('pages.report.edit');
    }

    public function store(StoreReportRequest $request, StoreReport $report)
    {

        $store = $report->store($request);

        if ($store)
            return redirect()
                ->route('dashboard.report.index')
                ->with('alert', [
                    'type' => 'success',
                    'msg'  => 'Berhasil menyimpan laporan harian'
                ]);
        else
            return redirect()
                ->route('dashboard.report.index')
                ->with('alert', [
                    'type' => 'danger',
                    'msg'  => 'Gaga; menyimpan laporan harian'
                ]);
    }
}
