<?php

namespace App\Http\Requests\CompanySettings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanySettingsRequest extends FormRequest
{
    /**
     * Determine if user authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'timezone' => 'sometimes|required|timezone',
            'language' => 'sometimes|required|string',
            'work_time' => 'sometimes|int',
            'color' => 'sometimes|present|array',
            'auto_thinning' => 'sometimes|boolean',
        ];
    }
}
