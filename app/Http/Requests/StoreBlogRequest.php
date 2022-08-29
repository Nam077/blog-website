<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'id_category' => 'required|integer',
            'description' => 'nullable|string',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            'content.required' => 'Content is required',
            'id_category.required' => 'Category is required',
            'description.required' => 'Description is required',
        ];
    }
}
