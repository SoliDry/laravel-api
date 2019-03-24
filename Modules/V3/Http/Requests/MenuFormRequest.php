<?php
namespace Modules\V3\Http\Requests;

use SoliDry\Extension\BaseFormRequest;

class MenuFormRequest extends BaseFormRequest 
{
    // >>>props>>>
    public $id;
    // Attributes
    public $title;
    public $rfc;
    public $parent_id;
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
