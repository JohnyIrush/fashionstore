<?php

namespace App\Http\Controllers\Store\Products;

use App\Extentions\Cart;
# use App\Mail\purchase\SuccessfulPurchaseEmail;

use Srmklive\PayPal\Services\ExpressCheckout;

use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PurchaseController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        # $this->middleware('auth');
    }
    /**
     * Buyer adds product
     * to cart
    */
    public function addtocart(Request $request,$id){
        $product = Product::with(["images","brand","categories"])
                                       ->where("id", $id)
                                       ->get();
        #return response()->json($product[0]->id, 200);
        $oldCart = session('cart') ? session('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product[0],$product[0]->id);
        session(['cart'=>$cart]);
        return response()->json(session('cart'), 200);
    }
    /**
     * reduce product added
     * into the cart
    */
    public function reduceProductByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        Session::put('cart',$cart);
    }
     /**
      * remove added product
     */
    public function removeItem($id){
        $oldCart = session('cart') != null ? session('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        //dd($cart);
        if ($cart) {
         session(['cart'=>$cart]);
        }else{
            session()->forget('cart');
        }
    }
    /**
     * Go to payment page
    */
    public function paymentPage(){
        if (Session::has('cart')) {
            return view('shop.pages.payment');
        }else{
            return redirect()->route('shop');
        }

    }

    public function checkout(){
        if (!session('cart')) {
            return response()->redirect('/shop');
        }
        $oldCart = session('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.pages.stripe',[
            'total' =>$total
        ]);
    }

    /**
     * Save Customer Addrress
    */

    /*
     public function address(Request $request){
           $this->validate($request,[
              'Address' => 'required',
              'Address_2' => 'required',
              'City' => 'required',
              'State' => 'required',
              'Zip' => 'required'
           ]);

           $adress = Adress::firstOrNew([
             'user_id' => 3,
             'Address' => $request->Address,
             'Address_2' => $request->Address_2,
             'City' => $request->City,
             'State' => $request->State,
             'Zip' => $request->Zip,
            ],
      );

     }
    */

    public function makePaypalPayment(Request $request){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        try {

            $order = new Order();
            $order->order = serialize($cart);
            $order->address_id = 1;
            $order->user_id = Auth::user()->id;
            $order->payment_id = $request->id;

            Auth::user()->orders()->save($order);

        } catch(Exception $e){
            return response()->json($e,200);
            # return redirect()->route('pay');
        }

        Session::forget('cart');
        # return redirect()->route('/')->with('success','Checkout Was successfull');

        # Mail::to(Auth::user()->email)->send(new SuccessfulPurchaseEmail());

      }

        //get Default adress if exists
        /*
        public function getDefaultAdress(){
          $address = DB::table('adresses')->where('default', 1)->first();
          if ($address) {
            return response()->json($address,200);
          }else{
            return response()->json([-1],200);
          }
        }
        */

        public function cartQuantity(Request $request)
        {

            return response()->json(session('cart'), 200);
            
        }

        public function cartItems(Request $request)
        {

            return response()->json(session('cart'), 200);
            
        }

        public function orders()
        {
            $orders= Auth::user()->orders;
            $unserialisedorders = [];

            foreach ($orders as $order) {
                $order->order =  unserialize($order->order);
                array_push($unserialisedorders, $order);
            }

            return $unserialisedorders;
        }
        
    }