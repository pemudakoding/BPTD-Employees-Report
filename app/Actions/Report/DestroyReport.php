<?php

namespace App\Actions\Report;

class DestroyReport
{

    public function destroy($activityReportObject)
    {

        $deleting = $activityReportObject->delete();

        if ($deleting)
            return redirect()
                ->route('dashboard.report.index')
                ->with('alert', [
                    'type' => 'success',
                    'msg'  => 'Berhasil menghapus laporan harian'
                ]);
        else
            return redirect()
                ->route('dashboard.report.index')
                ->with('alert', [
                    'type' => 'danger',
                    'msg'  => 'Gagal menghapus laporan harian'
                ]);
    }
}
