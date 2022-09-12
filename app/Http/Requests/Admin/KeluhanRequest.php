<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class KeluhanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'category_id' => 'required',
            'user_id' => 'required|exists:users,id',
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            'status' => 'required',
            'published_at' => 'required'
        ];
    }
}
