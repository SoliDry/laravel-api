<?php
namespace Modules\V1\Entities;

use rjapi\extension\BaseModel;

class Menu extends BaseModel 
{
    protected $primaryKey = "id";
    protected $table = "menu";
    public $timestamps = false;

}
