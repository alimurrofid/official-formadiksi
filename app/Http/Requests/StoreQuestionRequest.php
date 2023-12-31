<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'email' => 'required|email|max:255',
            'nama' => 'required|max:255',
            'nim' => 'required|numeric|digits:10',
            'jurusan' => 'required|max:255',
            'prodi' => 'required|max:255',
            'angkatan' => 'required|numeric|digits:4',
            'untuk' => 'required',
            'pertanyaan' => 'required',
        ];
    }
}
