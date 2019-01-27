<?php
namespace Modules\V3\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use rjapi\extension\BaseModel;

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
