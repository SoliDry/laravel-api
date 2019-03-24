<?php
namespace Modules\V1\Entities;

use SoliDry\Extension\BaseModel;

class TagArticle extends BaseModel 
{
    // >>>props>>>
    protected $primaryKey = 'id';
    protected $table = 'tag_article';
    public $timestamps = true;
    // <<<props<<<
}
