<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Shop\Insurance;
use App\Models\Shop\Products;
use Carbon\Carbon;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
private $insurance_date;
private $oc_health_date;

    public function index()
    {
        $new_in = Products::where('new_in',1)->orderBy('created_at', 'desc')->first();
        $most_popular = Products::where('most_popular',1)->orderBy('created_at', 'desc')->first();
        return view('frontend.index', compact('new_in', 'most_popular'));
        //return $this->fetch_records($products);
    }

//    function fetch_records($products){
//
//        //return $insurance;
//        if(!empty($products)){
//            $oc_health_date = Carbon::parse($products->updated_at)->format('d/m/Y');
//        } else{
//            $products = (object)['image_url' => '/img/frontend/logo_horiz.png',
//                                  'url' => '#',
//                                  'id' => ''];
//            $oc_health_date = "01/01/2000";
//        }
//
//        if(!empty($insurance)){
//            $insurance_date = Carbon::parse($insurance->updated_at)->format('d/m/Y');
//        } else{
//            $insurance = (object)['image_url' => '/img/frontend/logo_horiz.png',
//                'url' => '#',
//                'id' => ''];
//            $insurance_date = "01/01/2000";
//        }
//
//        if($insurance_date > $oc_health_date){
//            $item = $insurance;
//            //return $item;
//            return view('frontend.index', compact('item'));
//
//        }
//
//        $item = $oc_health;
//        //return $item;
//        return view('frontend.index', compact('item'));
//
//    }
}