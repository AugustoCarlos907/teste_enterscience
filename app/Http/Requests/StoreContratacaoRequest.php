<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContratacaoRequest extends FormRequest
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
            'artist_id' => 'required|exists:artists,id',
            'nome' => 'required|string|max:255',
            'data_evento' => 'required|date|after_or_equal:today',
            'endereco' => 'nullable|string',
            'cache' => 'required|numeric|min:0',
        ];
    }
}
