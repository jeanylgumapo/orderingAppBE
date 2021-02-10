<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submenu;

class SubmenuController extends Controller
{
   public function getSubmenu(){
    	$menu=Submenu::all();
    	return $menu;
    }
}
