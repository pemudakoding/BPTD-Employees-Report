<?php

namespace App\Http\Requests;

use App\Models\ActivityReport;
use Illuminate\Foundation\Http\FormRequest;

class UpdateReportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        $report = $this->route('activityReport');

        return $this->user()->can('update', $report);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'service_status' => 'required|string|in:Perjalanan Dinas,Kantor Induk'
        ];
    }
}
