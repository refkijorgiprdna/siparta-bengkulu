<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class WisataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|max:255',
            'coordinate' => 'required|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required|max:255',
            'link_video' => 'nullable|max:255'
        ];
    }
}
