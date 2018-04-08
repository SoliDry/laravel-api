<?php
namespace Modules\V1\Http\Middleware;

use rjapi\extension\BaseFormRequest;

class TagMiddleware extends BaseFormRequest 
{
    // >>>props>>>
    public $id = null;
    // Attributes
    public $title = null;
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
