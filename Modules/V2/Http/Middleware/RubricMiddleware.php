<?php
namespace Modules\V2\Middleware\Entities;

use rjapi\extension\BaseFormRequest;

class BaseFormRubric extends BaseFormRequest 
{
    public $id = null;
    // Attributes
    public $name_rubric = null;
    public $body = null;
    public $url = null;
    public $meta_title = null;
    public $meta_description = null;
    public $title_vk_fb = null;
    public $body_vk_fb = null;
    public $fb_image = null;
    public $vk_image = null;
    public $show_in_menu = null;
    public $show_in_tape = null;
    public $publish_to_rss = null;
    public $publish_to_aggregators = null;
    public $status = null;

    public  function authorize(): bool {
        return true;
    }

    public  function rules(): array {
        return [
            "name_rubric" => "string|required|max:500",
            "body" => "string|required",
            "url" => "string|required|max:255",
            "meta_title" => "string|max:255",
            "meta_description" => "string|max:255",
            "title_vk_fb" => "string|required|max:255",
            "body_vk_fb" => "string|max:255",
            "fb_image" => "string|max:255",
            "vk_image" => "string|max:255",
            "show_in_menu" => "boolean|",
            "show_in_tape" => "boolean|",
            "publish_to_rss" => "boolean|",
            "publish_to_aggregators" => "boolean|",
            "status" => "in:draft,published,postponed,archived",
        ];
    }

    public  function relations(): array {
        return [
            "tags",
        ];
    }


}
