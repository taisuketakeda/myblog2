<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'=>'required|min:3',
            'body'=>'required'
        ];
    }

    public function messages(){

        return[

            'title.required' => 'タイトルを書いてね',
            'title.size:3' => 'タイトルを３文字以上のものを書いてね',
       

            'body.required' => '内容を書いてね',
        ];
    
    }

}
