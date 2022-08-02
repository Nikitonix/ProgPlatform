<?php

namespace App\Http\Requests\Admin\Documentation;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string|max:500',


            //нужно чтобы category_id существовал в БД для того чтобы произошла валидация
            //проверка будет проходить в таблице categories
            //category_id == categories(id)
            'category_id' => 'required|exists:categories,id'
        ];
    }
}
