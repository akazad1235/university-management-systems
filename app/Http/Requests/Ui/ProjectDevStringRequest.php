<?php

namespace App\Http\Requests\Ui;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use App\Traits\ResponseTrait;

class ProjectDevStringRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'key_name' => 'unique:tbl_ui_strings,key_name|required',
            'ja' => 'required',
            'en' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'key_name.required' => 'The :attribute'."must not empty",
            'key_name.unique' => 'The :attribute'."key value has been duplicated",
            'ja.required' => 'The :attribute'."must not empty",
            'en.required' => 'The :attribute'."must not empty",
        ];
    }
    protected function failedValidation(Validator $validator)
    {

        throw new HttpResponseException(
            $this->responseError( (new ValidationException($validator))->errors())
        );
    }
}
