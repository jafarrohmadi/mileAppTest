<?php

namespace App\Http\Requests\API;

use App\Models\Package;
use Illuminate\Http\Request;

class UpdatePackageAPIRequest extends Request
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
        $rules = Package::$rules;

        return $rules;
    }
}
