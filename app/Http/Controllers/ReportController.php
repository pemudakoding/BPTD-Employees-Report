<?php

namespace App\Http\Controllers;

use App\Actions\Report\{StoreReport, GetReport, UpdateReport};
use App\Models\{ActivityReport};
use Illuminate\Http\Request;
use App\Http\Requests\{StoreReportRequest, UpdateReportRequest};

class ReportController extends Controller
{

    public function index(GetReport $report)
    {
        $reports = $report->getAllReport();

        return view('pages.report.index', compact('reports'));
    }

    public function create()
    {
        return view('pages.report.create');
    }

    public function edit(ActivityReport $activityReport)
    {
        return view('pages.report.edit', compact('activityReport'));
    }

    public function store(StoreReportRequest $request, StoreReport $report)
    {
        return $report->store($request);
    }

    public function update(
        UpdateReportRequest $request,
        UpdateReport $activityReportAction,
        ActivityReport $activityReport
    ) {

        return $activityReportAction
            ->update($activityReport, $request);
    }
}
