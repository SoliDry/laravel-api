<?php
namespace Modules\V2\Http\Middleware;

use rjapi\extension\BaseModel;

class TagMiddleware extends BaseModel 
{
    protected $primaryKey = "id";
    protected $table = "tag";
    public $timestamps = false;

}
