<?php

namespace App\Http\Requests\Meal;

use App\Http\Requests\FoundationRequest;

class GetMealsSearchRequest extends FoundationRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'per_page' => 'integer',
            'search_by' => 'nullable|string'
        ];
    }
}
