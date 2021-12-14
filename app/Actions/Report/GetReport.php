<?php

namespace App\Actions\Report;

use App\Models\ActivityReport;
use Illuminate\Support\Facades\Auth;

class GetReport
{

    public function getAllReport()
    {

        $reports = ActivityReport::where('user_id', Auth::user()->id)
            ->paginate(5);

        return $reports;
    }
}
