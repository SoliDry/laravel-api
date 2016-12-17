<?php
namespace Modules\V2\Http\Middleware;

use rjapi\extension\BaseModel;

class RubricMiddleware extends BaseModel 
{
    protected $primaryKey = "id";
    protected $table = "rubric";
    public $timestamps = false;

}
