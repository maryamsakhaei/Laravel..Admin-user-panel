<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Session;
use App\adminlist;
use App\usercomment;
use App\product;
use App\userlist;
use DB;
use Validator;
use Redirect;
use Input;
use Hash;
class Adminprofilecontroller extends Controller
{
    public function adminprofile(){
        $session=Session::has('admin');
        if($session){
            return view('adminprofile');
        }
        else{   
            $url=url('adminlogin');
            return redirect($url);
        }
    }
/*===============================viewuser======================*/    
    public function viewuser(){
        $session=Session::has('admin');
        if($session){
            $model = DB::select('select * from userlist');
            $userlist=userlist::orderBy('id','DESC')->simplePaginate(15);
            return View('viewuser',['name'=>$model]);
        }
   }
/*===============================viewproduct======================*/     
   public function viewproduct(){
        $session=Session::has('admin');
        if($session){
            $product = DB::select('select * from product');
            return view ('viewproduct')->with('product',$product);
        }

    }
/*===============================insert_product======================*/
    public function insert_product(){
        $session=Session::has('admin');
        if($session){
            $product = DB::select('select * from product');
            return view ('insertproduct')->with('product',$product);
        }
    }   
/*===============================insert_product_store======================*/
    public function insert_product_store(Request $req)  {
        $session=Session::has('admin');
        if($session){
            request()->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time().'.'.request()->photo->getClientOriginalExtension();
            request()->photo->move(public_path('/image/'), $imageName);  
            product::create(
                ['photo' => $imageName,
                'product_id' => $req->product_id,
                'name' => $req->name,
                'price' => $req->price,
                'description' => $req->description,
                'tag'=> $req->tag,
                'categories'=> $req->categories,
                'categoriesname'=>$req->categoriesname,
                ]
            );
             return back()
            ->with('success','You have successfully upload image.');
        }
    }
/*===============================removeuser======================*/
    public function removeuser($id){
        $session=Session::has('admin');
        if($session){
            userlist::find($id)->delete();
            return back();
        }
    } 
/*===============================bannuser-opration ======================*/    
    public function bannuser($id){
        $session=Session::has('admin');
        if($session){
            $user = userlist::find($id);
            $user->bann=1;
            $user->save();
            return back();
        }
        // $tomorrow=carbon::now()->addDay;
        // Temtags($userlist)->tagit('banned',$tomorrow);
    
    }  
/*===============================Admin-as User-opration ======================*/     
    public function adminasuser($id){  
        if(Session::has('admin')){
             $userlist=userlist::find($id);
             
            $userlist = DB::table('Userlist')->select('name','mobile','email','password','photo','id')->where([
            ['id', '=', $id]])->first();
           // dd($userlist);
            Session::put([
                'email' => $userlist->email ,
            ]);
            //redirect 

            // اگر بخواهیم ادمین فقط یک بار وارد پروفایل کاربر بشه همین قسمت سیشن ادمین رو  دستروی میکنیم
            Session::forget('admin');
            
            //هر وقت ریترن داشته باشیم دستورات پایین رو ران نمیکنه
            $url=url('show');
            return redirect($url);
        } 
        else{
            $url=url('adminlogin');
            return redirect($url);
        } 
    }         
}



