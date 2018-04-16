<?php

namespace App\Http\Controllers;
use App\Product; 
use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function getIndex(){
    	return view('master');
    }

    public function getHome(){
    	
        $new_product = Product::where('new',1)->get();
    	
    	return view('page.home',compact('new_product'));
    }

     public function getProduct($type){
    	$product_type = Product::where('id_type',$type)->get();
    	$other_product = Product::where('id_type','<>',$type)->paginate(3);
    	
    	return view('page.product',compact('product_type','other_product'));
    }

    

     public function getContact(){
    	return view('page.contact');
    }

     public function getSignup(){
    	return view('page.signup');
    }

    public function getLogin(){
    	return view('page.login');
    }

     public function getNews(){
    	return view('page.news');
    }

    public function getDetail(Request $req){
        $product = Product::where('id',$req->id)->first();
         return view('page.detail',compact('product'));
    }

    public function getCart(){
         return view('page.cart');
    }

   
}
