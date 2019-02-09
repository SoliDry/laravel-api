<?php
namespace Modules\V1\Http\Requests;

use SoliDry\Extension\BaseFormRequest;

class TagFormRequest extends BaseFormRequest 
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
            'title' => 'string|required|min:3',
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
