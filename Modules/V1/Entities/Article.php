<?php
namespace Modules\V1\Entities;

use rjapi\extension\BaseModel;

class Article extends BaseModel 
{
    protected $primaryKey = "id";
    protected $table = "article";
    public $timestamps = false;

    public function tag() 
    {
        return $this->belongsToMany(Tag::class, 'tag_article');
    }

    public function topic() 
    {
        return $this->belongsTo(Topic::class);
    }

}
