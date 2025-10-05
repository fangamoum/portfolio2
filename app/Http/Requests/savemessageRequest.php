<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class savemessageRequest extends FormRequest
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
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'sujet' => 'nullable|string|max:255',
            'message' => 'required|string',
        ];
    }

     public function message(){
        return [
            'nom.required' => 'le nom est obligatoire',
            'email.required' => 'l\'email est obligatoire',
            'email.email' => 'l\'email doit etre valide',
            'message.required' => 'le message est obligatoire',
        ];
}

}
