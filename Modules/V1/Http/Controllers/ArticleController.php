<?php
namespace Modules\V1\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends DefaultController
{
    public function create(Request $request)
    {
        // any business logic here for input pre-processing data
        parent::create($request);
        // any business logic here for output pre-processing data
    }
}
