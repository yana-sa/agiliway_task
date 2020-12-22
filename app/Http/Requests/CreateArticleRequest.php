<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;


class CreateArticleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @property string $title
     * @property string $description
     * @property string $content
     * @property Carbon $created_at
     * @property Carbon $updated_at
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:articles|max:64',
            'description' => 'required|max:256',
            'content' => 'required',
        ];
    }
}
