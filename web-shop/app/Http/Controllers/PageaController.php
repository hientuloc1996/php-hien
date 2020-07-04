<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\Type_product;
class PageaController extends Controller
{
    function getIndex(){
        return view('master');
    }
}
