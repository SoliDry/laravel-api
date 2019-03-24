<?php
namespace Modules\V2\Entities;

use SoliDry\Extension\BaseModel;

class TagArticle extends BaseModel 
{
    // >>>props>>>
    protected $primaryKey = 'id';
    protected $table = 'tag_article';
    public $timestamps = true;
    // <<<props<<<
}
