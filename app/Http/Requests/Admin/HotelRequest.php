<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
            'bintang' => 'required|integer|min:1|max:5',
            'deskripsi' => 'required',
            'alamat' => 'required|max:255',
            'link_reservasi' => 'required|max:255',
            'link_video' => 'required|max:255'
        ];
    }
}
