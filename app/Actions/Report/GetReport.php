<?php

namespace App\Actions\Report;

use App\Models\ActivityReport;

class GetReport
{

    public function getAllReport()
    {

        $reports = ActivityReport::paginate(5);

        return $reports;
    }
}
