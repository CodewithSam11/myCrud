<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class AjaxController extends Controller
{
    public function form_submit(Request $request)
    {
        // return $request->post();
        $ajax = new Blog();
        $ajax->name = $request->name;
        $ajax->email = $request->email;
        $ajax->save();
        return ['msg' => "Data has been inserted"];
    }
}
