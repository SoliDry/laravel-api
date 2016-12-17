<?php

namespace Modules\V1\Http\Middleware;

use Closure;
use rjapi\extension\BaseFormRequest;

class TestMiddleware extends BaseFormRequest
{
    public $id = null;
    // Attributes
    public $name_rubric = null;
    public $url = null;
    public $meta_title = null;
    public $meta_description = null;
    public $show_menu = null;
    public $publish_rss = null;
    public $post_aggregator = null;
    public $display_tape = null;
    public $status = null;

    public  function authorize(): bool {
        return true;
    }

    public  function rules(): array {
        return [
//            "name_rubric" => "required|string|min:8|max:500",
//            "url" => "required|string|min:16|max:255",
            "meta_title" => "string|max:25",
            "meta_description" => "string|max:255",
//            "show_menu" => "required|boolean",
//            "publish_rss" => "required|boolean",
//            "post_aggregator" => "required|boolean",
//            "display_tape" => "required|boolean",
            "status" => "in:draft,published,postponed,archived",
        ];
    }

    public function messages()
    {
        return [
            'required.name_rubric' => 'vsdfvsfvdf sdfvdsf'
        ];
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
//        echo $request->meta_title;
//        if (Auth::guard($guard)->check()) {
//            return redirect('/home');
//        }
//
        return $next($request);
    }
}