<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SubWisataRequest extends FormRequest
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
            'wisata_id' => 'required|integer|exists:wisatas,id',
            'nama' => 'required|max:255',
            'coordinate' => 'required|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required|max:255',
            'link_video' => 'required|max:255'
        ];
    }
}
