<?php
namespace Modules\V1\Entities;

use rjapi\extension\BaseModel;

class Template extends BaseModel 
{
    protected $primaryKey = "id";
    protected $table = "template";
    public $timestamps = false;

    public function category_template() 
    {
        return $this->belongsTo(CategoryTemplate::class);
    }

}
