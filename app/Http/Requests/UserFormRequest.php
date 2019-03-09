<?php
namespace App\Http\Requests;

use SoliDry\Extension\BaseFormRequest;

class UserFormRequest extends BaseFormRequest 
{
    // >>>props>>>
    public $id;
    // Attributes
    public $first_name;
    public $last_name;
    public $password;
    public $jwt;
    public $permissions;
    // bit_mask
    public $publisher = 1;
    public $editor = 2;
    public $manager = 4;
    public $photo_reporter = 8;
    public $admin = 16;
    // <<<props<<<

    // >>>methods>>>
    public function authorize(): bool 
    {
        return true;
    }

    public function rules(): array 
    {
        return [
            'first_name' => 'required|string|min:16|max:256',
            'last_name' => 'string|min:16|max:256|',
                // user password to refresh JWT (encrypted with password_hash)
            'password' => 'required|string|max:255',
                // Special field to run JWT Auth via requests
            'jwt' => 'required|string|max:512|',
            'permissions' => 'integer|max:20|',
        ];
    }

    public function relations(): array 
    {
        return [

        ];
    }
    // <<<methods<<<
}
