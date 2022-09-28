<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Product;
use App\Models\About;

class FrontendController extends Controller
{
   public function index(){
    return view('frontend.index');
   }

   public function aboutus(){
      $about=About::limit(9)->orderBy('id', 'DESC')->get();
    return view('frontend.about',compact('about'));
   }
   public function services(){

      $service=Service::where('id','14')->get();

      $service2=Service::where('id','13')->get();
      $service3=Service::where('id','12')->get();

    return view('frontend.service',compact('service','service2','service3'));
   }
   public function products(){
      $products=Product::latest()->limit(9)->get();
    return view('frontend.project',compact('products'));
   }
   public function contacts(){
    return view('frontend.contact');
   }
   
   
}
