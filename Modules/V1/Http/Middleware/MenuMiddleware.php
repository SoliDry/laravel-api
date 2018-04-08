<?php
namespace Modules\V1\Http\Middleware;

use rjapi\extension\BaseFormRequest;

class MenuMiddleware extends BaseFormRequest 
{
    // >>>props>>>
    public $id = null;
    // Attributes
    public $title = null;
    public $rfc = null;
    public $parent_id = null;
    // <<<props<<<

    // >>>methods>>>
    public function authorize(): bool 
    {
        return true;
    }

    public function rules(): array 
    {
        return [
            'title' => 'required|string',
            'rfc' => 'string|',
                // mandatory field for building trees
            'parent_id' => 'integer|max:10|',
        ];
    }

    public function relations(): array 
    {
        return [

        ];
    }
    // <<<methods<<<
}
