<?php
namespace Modules\V2\Middleware\Entities;

use rjapi\extension\BaseFormRequest;

class BaseFormTag extends BaseFormRequest 
{
    public $id = null;
    // Attributes
    public $title = null;

    // Relations

    public  function authorize(): bool {
        return true;
    }

    public  function rules(): array {
        return [
            "title" => "string|required|min:3|max:255",
        ];
    }

    public  function relations(): array {
        return [
            "rubric",
        ];
    }


}
