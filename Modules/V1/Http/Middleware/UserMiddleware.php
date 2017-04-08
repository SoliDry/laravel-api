<?php
namespace Modules\V1\Http\Middleware;

use rjapi\extension\BaseFormRequest;

class UserMiddleware extends BaseFormRequest 
{
    public $id = null;
    // Attributes
    public $first_name = null;
    public $last_name = null;
    public $password = null;
    public $jwt = null;

    public function authorize(): bool 
    {
        return true;
    }

    public function rules(): array 
    {
        return [
            "first_name" => "required|string|min:16|max:256",
            "last_name" => "string|min:16|max:256",
            // user password to refresh JWT (encrypted with password_hash)
            "password" => "required|string|max:255",
            // Special field to run JWT Auth via requests
            "jwt" => "required|string|min:256|max:512|",
        ];
    }

    public function relations(): array 
    {
        return [

        ];
    }

}
