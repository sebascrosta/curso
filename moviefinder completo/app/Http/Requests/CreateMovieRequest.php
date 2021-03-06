<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMovieRequest extends FormRequest
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
            'title' => 'required',
            'rating' => ['required', 'numeric', 'between:0,10'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El titulo es requerido.',
            'rating.required' => 'El rating es requerido.',
            'rating.numeric' => 'El rating tiene que ser un número.',
            'rating.between' => 'El rating tiene que estar entre 0 y 10.',
        ];
    }
}
