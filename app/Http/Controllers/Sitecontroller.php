<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Boolfalse\LaravelShoppingCart\Facades\Cart;
use App\BooksModel;
use App\product; 
use App\orders; 
use App\categories;  
use DB;
use Validator;  
use Redirect;
use Input;
use Hash;
class Sitecontroller extends Controller{
    public function index(){
        return view('index');
    }
/*================================food=============*/
    public function food(Request $searchTerm){
        $model = DB::select('select * from product');
        return view ('food')->with('name',$model);
    }
/*================================clothes=============*/
    public function clothes(Request $searchTerm){
        $model = DB::select('select * from product');
        return view ('clothes')->with('name',$model);
    }
/*================================applience=============*/
    public function applience(Request $searchTerm){
        $model = DB::select('select * from product');
        return view ('applience')->with('name',$model);
    }
/*================================tools=============*/
public function tools(Request $searchTerm){
    $model = DB::select('select * from product');
    return view ('tools')->with('name',$model);
}    
/*================================detail=============*/    
    public function detail($id){
        $productdetail=product::find($id);
        $category = DB::select('select * from categories');
         return view('detail',['name'=>$productdetail]);
       // return view('detail',['name'=>$productdetail,'tag'=>$category]);
    }   
/*================================addtocart==============================*/  
    public function addtocart(Request $req){
        if (session::has('cart')){
            $cart=session::get('cart');
            if(array_key_exists($req->id,$cart)){
                $cart[$req->id]++;
            }
            else{
                $cart[$req->id]=1;
            }
            Session::put('cart',$cart);
        }
        else{
            
            $cart=array();
            $cart[$req->id]=1;
            Session::put('cart',$cart);
        }
        
         $value=Session::get('cart');
        //var_dump($value);
       //Session::forget('cart');
        // foreach(session::get('cart') as $key=>$value){
        //     $product=product::find($key);
        //     //echo $product->name;
        //     echo $value;
        //     echo "<br>";
        // }
   }
/*================================checkout==============================*/  
public function checkout(Request $req){
        foreach(session::get('cart') as $key=>$value){
               $key;//mohtavaye id 
            $product=product::find($key);   
        }
        //  echo  $product->name;  
        //echo $value;
        // $product=["spageti","meet","rice"]
        //dd($product);
       return view('checkout',['product'=>$product]);
}  
/*================================track==============================*/ 
    public function track(){
        return view('track');
    }

}

