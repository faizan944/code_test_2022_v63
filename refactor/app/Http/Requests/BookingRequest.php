<?php

namespace DTApi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
            'jobid' => 'required|numeric',
            'flagged' => 'nullable|boolean',
            'admincomment' => 'nullable|string',
            'manually_handled' => 'nullable|boolean',
            'by_admin' => 'nullable|boolean',
            'distance' => 'nullable',
            'time' => 'nullable',
            'session_time' => 'nullable',
        ];
    }

    public function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}