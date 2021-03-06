<?php

namespace App\Actions\Report;

use App\Models\ActivityReport;
use Illuminate\Support\Facades\Auth;

class StoreReport
{
    public function store($requestData)
    {

        $data = $requestData->all();
        $data['user_id'] = Auth::user()->id;

        $store = ActivityReport::create($data);

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
