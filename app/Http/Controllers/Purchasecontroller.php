<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\userlist;   
use App\bank;
use App\order;
use DB;
use Validator;
use Redirect;
use Input;
use Hash;
class Purchasecontroller extends Controller
{
    public function purchase(Request $req){
        $total_price=$req->total_price;
        $track_number=$req->$track_number;
        return view('purchase',['total_price'=>$total_price,'track_number'=>$track_number]);
    }
    public function payment(Request $req){
       $total_price=$req->total_price;
       $track_number=$req->track_number;
       $owner=$req->owner;
       $cvv=$req->cvv;
       $cart_number=$req->cart_number;
       $expaire_month=$req->expaire_month;
       $expaire_year=$req->expaire_year;
        $bank=bank::query()->where([
        ['cvv', '=', $cvv],
        ['cart_number', '=',$cart_number ],
        ['expaire_month', '=',$expaire_month ],
        ['expaire_year', '=',$expaire_year ],
       ])->first();
        $val=strlen($bank);
       if($val>=4){
           if($bank->value>=0){
                if($bank>=$total_price){
                    $final=49000000;
                    bank::query()->where(['cart_number'=>$cart_number])->update(['value'=>$final]);
                    session::put('track_number',$track_number);
                    $url=url('message');
                    return redirect($url);

                }
                else{
                    // echo "مبلغ کمتر از موجودی";
                    echo "Ihre Karte hat wenig Guthaben";

                }

           }
           else{
               echo "Seine Geld ist nicht genug";
           }
       }
       else{
          

    }
    }


}

