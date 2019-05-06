<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use Session;
use App\Cart;
class UserController extends Controller
{
    public function getSignup(){
        return view('user.signup');
    }

    public function postSignup(Request $request){
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' =>'required|min:4'
        ]);

        $user = new User ([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        $user->save();
            
        Auth::login($user);

        return redirect()->route('user.profile');
    }

    public function getSignin(){
        return view('user.signin');
    }

    public function postSignin(Request $request){
        $this->validate($request, [
            'email' => 'email|required',
            'password' =>'required|min:4'
        ]);

        if(Auth::attempt(['email'=>$request->input('email'), 'password'=> $request->input('password')])){
            if(Session::has('checkout')){
                $url='checkoutUrl';
                 $checkUrl= Session::get('checkout');
                 if ($url==$checkUrl) {
                     $oldCart= Session::get('cart');
                     $cart = new Cart($oldCart);
                     $total= $cart->totalPrice;
                     Session::forget('checkout');
                     return view('shop.checkout',['total' => $total ]);
                 }
                }

                else{
                    return redirect()->route('user.profile');
                }

             }

            
         

        return redirect()->back();
       
    }

        public function getProfile(){
        return view('user.profile');
    }
    
    public function getLogout(){
        Auth::Logout();
        return redirect()->route('user.signin');
    }


}
