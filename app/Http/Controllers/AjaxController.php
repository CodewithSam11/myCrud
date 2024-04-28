<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function form_submit(Request $request)
    {
        return $request->post();
    }
}
