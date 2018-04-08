<?php
namespace Modules\V1\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use rjapi\extension\BaseModel;

class Template extends BaseModel 
{
    // >>>props>>>
    protected $primaryKey = 'id';
    protected $table = 'template';
    public $timestamps = false;
    // <<<props<<<
    // >>>methods>>>

    public function category_template() 
    {
        return $this->belongsTo(CategoryTemplate::class);
    }
    // <<<methods<<<
}
