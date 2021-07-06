<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\userlist;
use DB;
use Validator;
use Redirect;
use Input;
use Hash;
class Usercontroller extends Controller
{
    public function create(){       
        return view('register');    
    }
    /*===============================store==================*/
    public function store(Request $req){
        $validatedData = $req->validate([
            'mobile.required'=>'require',
            'email.required'=>'require',
            'password.required'=>'require',
            ]);
            // 'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            // return userlist::create([
            //     'name' => $data['name'],
            //     'email' => $data['email'],
            //     'password' => Hash::make($data['password']),
            // ]);
            
            $userlist=new userlist($req->all());
            if($userlist->save()){
                $url=url('show');
                return redirect($url);
            }
        }
/*===============================show==================*/
    public function show(){  
        if(Session::has('email')||('admin')){
            $email=Session::get('email');
            $id=Session::get('id');
            $userlist=userlist::find($id);
            $userlist = DB::table('Userlist')->select('name','mobile','email','password','photo','id')->where([
            ['email', '=', $email]])->get();
        return view('show',['userlist'=>$userlist]);
        }
    }
/*===============================edit==================*/
    public function edit(){
        if(Session::has('email')){
            $email=Session::get('email');   
            $id=Session::get('id');
            $userlist=userlist::find($id);
            $userlist = DB::table('Userlist')->select('name','mobile','email','password','photo')->where([
            ['email', '=', $email]])->get();
            return view('edit',['userlist'=>$userlist]);
        }
    }
/*===============================update==================*/
    public function update(Request $req){   
        if(Session::has('email')){
        $email = session()->get('email');
                //  $userlist=userlist::find($email);
        // request()->validate([   
        //     'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // $imageName = time().'.'.request()->photo->getClientOriginalExtension();
        // request()->photo->move(public_path('/image/'), $imageName); 
        // $userlist->update($req->all());
        // $url=url('edit');
        // return redirect($url);
        DB::table('userlist')
            ->where('email', $email)
            ->update(['name' => $req->name,'email' => $req->email,'password' => $req->password,'mobile' => $req->mobile,]);
            $url=url('edit').'/'.$userlist-> $email;
            return redirect($url);
        }
    }
/*===============================login==================*/
    public function login(){
        return view('login');
    }
 // ==================checklogin============================//
 //if ban user = 1 => ban user 
    public function checklogin(Request $req){
        $password=$req->password;
        $email=$req->email;
        $userlist = DB::table('Userlist')->select('id','email', 'password','bann')->where([
        ['email', '=', $email],
        ['password', '=',$password ],
        ])->get();
        $chechredirect=strlen($userlist);
        if($chechredirect>=3){
                // if($userlist->bann='0'){
                    Session::put([
                        'email' => $email,
                    ]);
                    $url=url('show');
                    return redirect($url);
                // }
                // else{
                //     echo "You are blocked by Admin,please contact us";
                // }
        }
        else{
            $url=url('create');
            return redirect($url);
        }
   
    }
}
