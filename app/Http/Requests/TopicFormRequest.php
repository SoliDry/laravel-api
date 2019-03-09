<?php
namespace App\Http\Requests;

use SoliDry\Extension\BaseFormRequest;

class TopicFormRequest extends BaseFormRequest 
{
    // >>>props>>>
    public $id;
    // Attributes
    public $title;
    // <<<props<<<

    // >>>methods>>>
    public function authorize(): bool 
    {
        return true;
    }

    public function rules(): array 
    {
        return [
            'title' => 'required|string|min:16|max:256',
        ];
    }

    public function relations(): array 
    {
        return [
            'article',
        ];
    }
    // <<<methods<<<
}
