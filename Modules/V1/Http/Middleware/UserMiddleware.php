<?php
namespace Modules\V1\Http\Middleware;

use rjapi\extension\BaseFormRequest;

class UserMiddleware extends BaseFormRequest 
{
    public $id = null;
    // Attributes
    public $first_name = null;
    public $last_name = null;
    public $jwt = null;
    public $uniqid = null;

    public function authorize(): bool 
    {
        return true;
    }

    public function rules(): array 
    {
        return [
            "first_name" => "required|string|min:16|max:256",
            "last_name" => "string|min:16|max:256",
            // Special field to run JWT Auth via requests
            "jwt" => "required|string|min:64|max:512",
            // Needed to create JWT with secret
            "uniqid" => "required|string|min:13|max:13",
        ];
    }

    public function relations(): array 
    {
        return [

        ];
    }

}
