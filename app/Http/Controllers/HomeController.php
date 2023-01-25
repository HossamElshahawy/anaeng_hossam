<?php

namespace App\Http\Controllers;
use App\Models\Artical;
use App\Models\Category;
use App\Models\Magazine;
use Illuminate\Http\Request;


class HomeController extends Controller
{
   public function home (){

    $articals =Artical::limit(5)->get();
    $magazeine =Magazine::all();
    $category =Category::all();

    return view ('home', compact('articals', 'magazeine' , 'category'));

   }
}
