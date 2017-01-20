<?php
namespace Modules\V1\Http\Middleware;

use rjapi\extension\BaseFormRequest;

class TopicMiddleware extends BaseFormRequest 
{
    public $id = null;
    // Attributes
    public $title = null;

    public function authorize(): bool 
    {
        return true;
    }

    public function rules(): array 
    {
        return [
            "title" => "required|string|min:16|max:256",
        ];
    }

    public function relations(): array 
    {
        return [
            "article",
        ];
    }

}
