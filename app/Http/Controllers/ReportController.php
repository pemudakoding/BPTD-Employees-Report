<?php

namespace App\Http\Controllers;

use App\Actions\Report\StoreReport;
use App\Models\ActivityReport;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\{StoreReportRequest};

class ReportController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $this->authorize('viewAny', ActivityReport::class);

        return view('pages.report.index');
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
