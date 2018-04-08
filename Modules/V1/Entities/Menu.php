<?php
namespace Modules\V1\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use rjapi\extension\BaseModel;

class Menu extends BaseModel 
{
    // >>>props>>>
    protected $primaryKey = 'id';
    protected $table = 'menu';
    public $timestamps = false;
    // <<<props<<<
    // >>>methods>>>

    // <<<methods<<<
}
