<?php
namespace Modules\V1\Entities;

use rjapi\extension\BaseModel;

class CategoryTemplate extends BaseModel 
{
    protected $primaryKey = "id";
    protected $table = "category_template";
    public $timestamps = false;

    public function template() 
    {
        return $this->hasMany(Template::class);
    }

}
