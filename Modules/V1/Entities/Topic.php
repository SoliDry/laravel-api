<?php
namespace Modules\V1\Entities;

use rjapi\extension\BaseModel;

class Topic extends BaseModel 
{
    protected $primaryKey = "id";
    protected $table = "topic";
    public $timestamps = false;

    public function article() 
    {
        return $this->hasMany(Article::class);
    }

}
