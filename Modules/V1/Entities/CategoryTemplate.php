<?php
namespace Modules\V1\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use rjapi\extension\BaseModel;

class CategoryTemplate extends BaseModel 
{
    // >>>props>>>
    protected $primaryKey = 'id';
    protected $table = 'category_template';
    public $timestamps = false;
    // <<<props<<<
    // >>>methods>>>

    public function template() 
    {
        return $this->hasMany(Template::class);
    }
    // <<<methods<<<
}
