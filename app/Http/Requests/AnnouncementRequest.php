<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title'=>'required|max:30',
            'body'=>'required|min:10|max:500',
            'price'=>'required',
        ];
    }

    
    public function messages()
    {
        return [
            'title.required'=>'Inserisci un titolo.',
            'title.max'=>'Il titolo non può contenere più di 30 caratteri.',
            'body.required'=>'Inserisci l\'annuncio.',
            'body.min'=>'L\'annuncio deve contenere almeno 10 caratteri.',
            'body.max'=>'L\'annuncio non può contenere più di 200 caratteri.',
            'price.required'=>'Inserire un prezzo.',
        ];
    }
}
