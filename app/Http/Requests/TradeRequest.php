<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TradeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
        // 'name'=> 'required|min:1',
        'cover'=> 'required|image',
        // 'price'=> 'required',
        // 'description'=> 'required|min:3|max:150',
        ];
    }
    public function messages(): array {
    
        return [
            // 'name.required'=> 'Inserire titolo',
            // 'name.min'=> 'Inserire titolo',
            'cover.required'=> 'Inserire immagine',
            'cover.image'=> 'Il formato deve essere jpg o jpeg',
            // 'price.required'=> 'Inserire prezzo',
            // 'description.required'=> 'Inserire descrizione',
            // 'description.min'=> 'Inserire minimo 5 parole',
            // 'description.max'=> 'Inserire massimo 150 parole',
        ];
    }  
    
    }
