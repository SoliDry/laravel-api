<?php
namespace Modules\V1\Entities;

use rjapi\extension\BaseModel;

class User extends BaseModel 
{
    protected $primaryKey = "id";
    protected $table = "user";
    public $timestamps = false;

}
