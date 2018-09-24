<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\CashOut;
use App\Mail\OrderShipped;
use App\Models\Auth\User;
use App\Models\Shop\Insurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Shop\Products;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;



class ShopController extends Controller
{
    function index(){
        //get all products and services
        $products = Products::where('visible', 1)->get();
        $category = "All Products";
        //return count($products);
        return view('frontend.shop.index', compact('products', 'category'));
    }

    function insuranceIndex(){
        //get all products and services
        $products = Products::where('visible', 1)->where('category', 'insurance')->get();
        $category = "Insurances";
        //return count($products);
        return view('frontend.shop.index', compact('products', 'category'));
    }

    function rewardIndex(){
        //get all products and services
        $products = Products::where('visible', 1)->where('category', 'reward and recognition')->get();
        $category = "Reward and Recognition";
        //return count($products);
        return view('frontend.shop.index', compact('products', 'category'));
    }

    function employeeIndex(){
        //get all products and services
        $products = Products::where('visible', 1)->where('category', 'employee benefits')->get();
        $category = "Employee Benefits";
        //return count($products);
        return view('frontend.shop.index', compact('products', 'category'));
    }

    function companyPurchasesIndex(){
        //get all products and services
        $products = Products::where('visible', 1)->where('category', 'company purchases')->get();
        $category = "Company Purchases";
        //return count($products);
        return view('frontend.shop.index', compact('products', 'category'));
    }

    function superTreatsIndex(){
        //get all products and services
        $products = Products::where('visible', 1)->where('category', 'Super Treats')->get();
        $category = "Super Treats";
        //return count($products);
        return view('frontend.shop.index', compact('products', 'category'));
    }

    function product($id){
        $product = Products::findOrFail($id);
        return view('frontend.shop.product', compact('product'));
    }

    function insurance($id){
        $product = Insurance::findOrFail($id);
        return view('frontend.shop.product', compact('product'));
    }

    function add_cart(Request $request){
        $product = Products::where('name', $request->input('name'))->get();
        $image_url = "";
        $id = "";
        foreach ($product as $prod){
            $image_url = $prod->image_url;
            $id = $prod->id;
        };
        $qty = (int)$request->input('quantity');
        $price = (int)$request->input('price');
        Cart::add($request->input('name'), $request->input('name'), $qty , $price,
            ['image_url' => $image_url, 'product_id' => $id]);
        //return Cart::content();
        return redirect(route('frontend.cart'));
    }

    function remove_from_cart($rowId){
        Cart::remove($rowId);
        return redirect()->back();
    }

    function cart(){
        return view('frontend.shop.cart');
    }

    function update(Request $request){

        Cart::update($request->input('rowId'), $request->input('qty'));
        return redirect()->back();
    }

    function checkout(){
        if(Auth::check()){
            $cart =  Cart::content();
            // IF BALANCE IS GREATER THAN CART THEN:->
            $cart_total = str_replace(",","",Cart::total());
            //dd((float)Auth::user()->balance < $cart_total);
            if(Auth::user()->balance < $cart_total){
                return redirect()->back()->withFlashDanger('You only have ' . Auth::user()->balance . ' in your account.');
            }
            elseif (Cart::content()->isEmpty()){
                return redirect()->back()->withFlashDanger('Your cart is empty');
            }
            $new_balance = Auth::user()->balance - (int)Cart::total();
            Auth::user()->update(['balance' => $new_balance]);
            // MAIL BOTH ADMIN AND CUSTOMER WITH THE ORDER
            Mail::to('nick.ashford@growthpartnersplc.co.uk')->send(new OrderShipped($cart));
            // THEN DESTROY CART
            Cart::destroy();
            // THEN RETURN BACK WITH MESSAGE
            return redirect()->back()->withFlashSuccess('Your Order has been placed.');
            //return Cart::content();
        } else{
            return redirect()->back()->withFlashDanger('Please login to purchase items.');
        }

    }

    function cashout(Request $request){
        $cashout = $request->input('cashout');
        $user = Auth::user();
        $user_array = Auth::user()->toArray();
        $balance = Auth::user()->balance;
        if($cashout > $balance){
            return redirect()->back()->withFlashDanger('You only have £'. $balance . ' in your account.');
        }
        $new_balance = $balance - $cashout;
        $user->update(['balance' => $new_balance]);
        // SEND EMAIL
        Mail::to('nick.ashford@growthpartnersplc.co.uk')->send(new CashOut($user, $cashout));
        return redirect()->back()->withFlashSuccess('Your request has been emailed.');
    }

}
