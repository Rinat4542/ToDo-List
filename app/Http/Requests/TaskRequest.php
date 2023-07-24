<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'title' => 'string',
            'body' => 'string',
            'tags' => 'string',
            'image' => 'string'
        ];
    }
}
