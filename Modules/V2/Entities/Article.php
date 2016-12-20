<?php
namespace Modules\V2\Entities;

use rjapi\extension\BaseModel;

class Article extends BaseModel 
{
    protected $primaryKey = "id";
    protected $table = "articles";
    public $timestamps = true;

}
