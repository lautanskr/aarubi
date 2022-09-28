<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Product;
use App\Models\About;
use App\Models\Home;
use App\Models\Review;




class FrontendController extends Controller
{
   public function index(Home $home, Service $service, Product $product, Review $review){
      $home = Home::all();
      $services= Service::limit(3)->orderBy('id', 'DESC')->get();
      $product = Product::limit(6)->orderBy('id', 'DESC')->get();
      $review = Review::limit(4)->orderBy('id', 'DESC')->get();
    return view('frontend.index', compact('home','services', 'product', 'review'));
   }

   public function aboutus(){
      $about=About::limit(9)->orderBy('id', 'DESC')->get();
    return view('frontend.about',compact('about'));
   }
   public function services(){

      $service=Service::where('id','1')->get();

      $service2=Service::where('id','2')->get();
      $service3=Service::where('id','3')->get();

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
