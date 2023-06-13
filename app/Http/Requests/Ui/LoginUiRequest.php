<?php

namespace App\Http\Requests\Ui;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use App\Traits\ResponseTrait;

class LoginUiRequest extends FormRequest
{
    use ResponseTrait;
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'login_title_en' => 'required',
            'email_address_en' => 'required',
            'password_en' => 'required',
            'login_btn_en' => 'required',
            'login_title_ja' => 'required',
            'email_address_ja' => 'required',
            'password_ja' => 'required',
            'login_btn_ja' => 'required',
        ];
    }

    /**
     * @return string[]
     */
    public function messages()
    {
        return [
            'login_title_ja.required' => "The :attribute ". __('static_data.project.title'),
        ];
    }
//    protected function failedValidation(Validator $validator)
//    {
//        throw new HttpResponseException(response()->json(['errors' => $validator->errors()], 422));
//    }
    protected function failedValidation(Validator $validator)
    {

        throw new HttpResponseException(
            $this->responseError( (new ValidationException($validator))->errors())
        );
    }
}
