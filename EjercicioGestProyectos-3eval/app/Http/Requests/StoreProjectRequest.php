<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
  * @return array
  */
  public function rules()
  {
    return [
      'title'=> 'required|unique:projects',
      'url'=> 'required|unique:projects',
      'description'=> 'required',
    ];
  }

  public function messages(){
    return [
      'title.required' => 'El proyecto necesita un título',
      'description.required' => 'El proyecto necesita una descripción',
      'url.required' => 'El proyecto necesita una URL'
    ];
  }
}
