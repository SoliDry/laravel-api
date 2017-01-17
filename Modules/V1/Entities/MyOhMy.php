<?php
namespace Modules\V1\Entities;

use rjapi\extension\BaseModel;

class MyOhMy extends BaseModel 
{
    protected $primaryKey = "id";
    protected $table = "myoh_my";
    public $timestamps = false;

}
