<?php
namespace Modules\V1\Entities;

use SoliDry\Extension\BaseModel;

class User extends BaseModel 
{
    // >>>props>>>
    protected $primaryKey = 'id';
    protected $table = 'user';
    public $timestamps = false;
    // <<<props<<<
    // >>>methods>>>

    // <<<methods<<<
}
