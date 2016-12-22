<?php
namespace Modules\V3\Entities;

use rjapi\extension\BaseModel;

class Tag extends BaseModel 
{
    protected $primaryKey = "id";
    protected $table = "tag";
    public $timestamps = false;

}
