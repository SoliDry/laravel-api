<?php
namespace Modules\V1\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use rjapi\extension\BaseModel;

class Article extends BaseModel 
{
    use SoftDeletes;

    // >>>props>>>
    protected $dates = ['deleted_at'];
    protected $primaryKey = 'id';
    protected $table = 'article';
    public $timestamps = false;
    // <<<props<<<
    // >>>methods>>>

    public function tag() 
    {
        return $this->belongsToMany(Tag::class, 'tag_article');
    }
    // <<<methods<<<
}
