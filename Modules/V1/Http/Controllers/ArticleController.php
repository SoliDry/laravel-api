<?php
namespace Modules\V1\Http\Controllers;

use Illuminate\Http\Request;
use Lcobucci\JWT\Parser;

class ArticleController extends DefaultController 
{
    public function view(Request $request, int $id)
    {
        $token = (new Parser())->parse((string)$request->jwt);
        $userId = $token->getClaim('uid');
        parent::view($request, $id);
    }
}
