<?php

namespace Modules\Backend\Http\Requests;

use App\Models\Greeting;
use Illuminate\Foundation\Http\FormRequest;

class CreateGreetingRequest extends FormRequest
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
        return Greeting::$rules;
    }
}
