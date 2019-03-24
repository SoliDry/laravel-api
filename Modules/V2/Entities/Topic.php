<?php
namespace Modules\V2\Entities;

use SoliDry\Extension\BaseModel;

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
