<?php

namespace App\Actions\Report;

class UpdateReport
{
    public function update($activityReportObject, $requestData)
    {

        $updating = $activityReportObject
            ->update($requestData->all());

        if ($updating)
            return redirect()
                ->route('dashboard.report.index')
                ->with('alert', [
                    'type' => 'success',
                    'msg'  => 'Berhasil mengubah laporan harian'
                ]);
        else
            return redirect()
                ->route('dashboard.report.index')
                ->with('alert', [
                    'type' => 'danger',
                    'msg'  => 'Gaga; mengubah laporan harian'
                ]);
    }
}
