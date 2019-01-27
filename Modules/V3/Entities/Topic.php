<?php
namespace Modules\V3\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use rjapi\extension\BaseModel;

class Topic extends BaseModel 
{
    // >>>props>>>
    protected $primaryKey = 'id';
    protected $table = 'topic';
    public $timestamps = false;
    // <<<props<<<
    // >>>methods>>>

    public function article() 
    {
        return $this->hasMany(Article::class);
    }
    // <<<methods<<<
}
