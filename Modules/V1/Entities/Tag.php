<?php
namespace Modules\V1\Entities;

use rjapi\extension\BaseModel;

class Tag extends BaseModel 
{
    protected $primaryKey = "id";
    protected $table = "tag";
    public $timestamps = false;

    public function article() 
    {
        return $this->belongsToMany(Article::class, 'tag_article');
    }

}
