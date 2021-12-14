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

        return ActivityReport::create($data);
    }
}
