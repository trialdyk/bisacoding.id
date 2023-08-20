<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class CategoryRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required',Rule::unique('categories', 'name')->ignore($this->category->id)],
            'photo' => 'required|image',
            'description' => 'required'
        ];
    }

    /**
     * Custom Validation Messages
     *
     * @return array<string, mixed>
     */

     public function messages()
     {
         return [
            'name.required' => 'Nama kategori harus diisi.',
            'name.unique' => 'Nama kategori sudah ada dalam database.',
            'photo.required' => 'Foto harus diunggah.',
            'photo.image' => 'File harus berupa gambar.',
            'description.required' => 'Deskripsi harus diisi.',
         ];
     }
}
