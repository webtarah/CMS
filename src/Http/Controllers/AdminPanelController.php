<?php

namespace Anari\Cms\Http\Controllers;

use Anari\Cms\Models\Category;
use Illuminate\Http\Request;

class AdminPanelController extends BaseController
{
    public function index(){
       // $text='Admin Panel';
        return Category::all();
        $text=config('cms.NAME');
        return view('cms::adminPanel',compact('text'));
    }
}
