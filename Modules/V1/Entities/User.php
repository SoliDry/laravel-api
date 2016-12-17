<?php

namespace Modules\V1\Entities;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ["username","email","password"];
}
