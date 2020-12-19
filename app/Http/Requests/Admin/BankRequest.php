<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BankRequest extends FormRequest
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
            'nama' => 'required|max:255',
            'users_id' => 'required|exists:users,id',
            'banklist_id' => 'required|exists:banklists,id',
            'no_rekening' => 'required|min:10',
            'cabang' => 'nullable',
            'kabupaten' => 'nullable'
        ];
    }
}
