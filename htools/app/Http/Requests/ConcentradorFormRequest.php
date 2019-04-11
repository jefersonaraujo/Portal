<?php

namespace sistemaLaravel\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConcentradorFormRequest extends FormRequest
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
            'descricao' => 'required|max:50',
            'ip' => 'required|max:20',
            'api_port' => 'required|max:20',
            'ssh_port' => 'required|max:20',
            'snmp' => 'required|max:20',
            'snmp_port' => 'required|max:20',
            'user' => 'required|max:20',
            'password' => 'required|max:20',
        ];
    }
}
