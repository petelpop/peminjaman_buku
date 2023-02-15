<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rule_task_unique = Rule::unique('books', 'Book');
        if ($this-> method() !== 'POST') {
            $rule_task_unique->ignore($this->route()->parameter('id'));
        }

        return [
            // 'tasks' => ['required', 'unique:Tasks'],
            'name' => ['required'],
            'book_name' => ['required'],
            'status' => ['required'],
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Nama Harus Diisi!',
            'book_name.required' => 'Nama Buku Harus Diisi!',
            'status.required' => 'Status Harus Diisi',
        ];
    }
}
