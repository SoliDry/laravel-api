<?php
namespace Modules\V3\Http\Requests;

use SoliDry\Extension\BaseFormRequest;

class ArticleFormRequest extends BaseFormRequest 
{
    // >>>props>>>
    public $id;
    // Attributes
    public $title;
    public $description;
    public $url;
    public $show_in_top;
    public $status;
    public $topic_id;
    public $rate;
    public $date_posted;
    public $time_to_live;
    public $deleted_at;
    // <<<props<<<

    // >>>methods>>>
    public function authorize(): bool 
    {
        return true;
    }

    public function rules(): array 
    {
        return [
            'title' => 'required|string|min:16|max:256|',
            'description' => 'required|string|min:32|max:1024|',
            'url' => 'string|min:16|max:255|',
                // Show at the top of main page
            'show_in_top' => 'boolean',
                // The state of an article
            'status' => 'in:draft,published,postponed,archived|',
                // ManyToOne Topic relationship
            'topic_id' => 'required|integer|min:1|max:6|',
            'rate' => '|min:3|max:9|',
            'date_posted' => '',
            'time_to_live' => '',
            'deleted_at' => '',
        ];
    }

    public function relations(): array 
    {
        return [
            'tag',
            'topic',
        ];
    }
    // <<<methods<<<
}
