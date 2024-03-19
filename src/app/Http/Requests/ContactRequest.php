<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ['required'],
            'gender' => ['required'],
            'email' => ['required', 'email'],
            'tel' => ['required', 'max:5'],
            'addr' => ['required'],
            'select' => ['required'],
            'content' => ['required','max:120'],

        ];
    }

    public function messages()
    {
        return [
            'name.required' => '姓を入力してください',
            'name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレス形式を入力してください',
            'tel.required' => '電話番号を入力してください',
            'tel.max' => '電話番号は5桁までの数字で入力してください',
            'addr.required' => '住所を入力してください',
            'select.required' => 'お問い合わせの内容を選択してください',
            'content.required' => 'お問い合わせ内容を入力してください',
            'content.max' => 'お問い合わせ内容は120文字以内で入力してください',
        ]
    }
}
