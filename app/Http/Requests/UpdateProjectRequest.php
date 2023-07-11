<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            "title"=>"required|min:5|max:50",
            "description"=>"required|min:5|max:65535",
            "thumb"=>"nullable|max:65535",
            "link"=>"nullable|max:65535",
        ];
    }
    public function messages(){
        return[

            "title.required" => "Il titolo è obbligatorio",
            "title.min" => "Il titolo deve essere almeno di :min caratteri",
            "description.required" => "La descrizone è obbligatoria",
            "description.min" => "La descrizone deve essere almeno di :min caratteri",  
        ];
    }
}
