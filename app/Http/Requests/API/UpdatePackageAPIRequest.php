<?php

namespace App\Http\Requests\API;

use App\Models\Package;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePackageAPIRequest extends FormRequest
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
        switch ($this->method()) {
            case 'PATCH':
            {
                return [];
            }
            case 'PUT':
            {
                return Package::$rules;
            }
            default:
                break;
        }

    }
}
