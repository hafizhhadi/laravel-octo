<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'release' => 'required',
            'length' => 'required',
            'description' => 'required',
            'mpaa_rating' => 'required',
            'genres' => 'required',
            'director' => 'required',
            'performers' => 'required',
            'languages' => 'required',
            'director' => 'required'
        ];
    }
}
