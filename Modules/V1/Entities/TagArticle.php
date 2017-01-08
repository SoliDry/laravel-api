<?php
namespace Modules\V1\Entities;

use rjapi\extension\BaseModel;

class TagArticle extends BaseModel 
{
    protected $primaryKey = "id";
    protected $table = "tag_article";
    public $timestamps = true;
}
