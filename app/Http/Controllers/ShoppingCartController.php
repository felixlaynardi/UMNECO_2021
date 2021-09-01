<?php

namespace App\Http\Controllers;

use App\Models\ShoppingCart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{

    public function menu()
    {
        return view('cms.page.greenate_menu', [
            'title' => 'Greenate Menu'
        ]);
    }

    public function orderSubmit(Request $request)
    {
        dd($request->input());
        $shoppingCart = new ShoppingCart();
        $dineInStatus =  $request->input('dineIn');
        $takeAwayInput =  $request->input('takeAway');
        $totalOrdered =  $request->input('TotalOrdered');

        if($dineInStatus == "True" && $takeAwayInput != "none"){
            $dineIn = TRUE;
            switch($takeAwayInput){
                case "Alter":
                    $takeAway = 2;
                    break;
                case "Exhort":
                    $takeAway = 1;
                    break;
                case "Tidbit":
                    $takeAway = 3;
                    break;
            }
        }else if($takeAwayInput != "none" && $dineInStatus == "False"){
            $dineIn = FALSE;
            switch($takeAwayInput){
                case "Alter":
                    $takeAway = 2;
                    break;
                case "Exhort":
                    $takeAway = 1;
                    break;
                case "Tidbit":
                    $takeAway = 3;
                    break;
            }
        }else if($dineInStatus == "True" && $takeAwayInput == "none"){
            $dineIn = TRUE;
            $takeAway = 0;
        }else if($dineInStatus == "False" && $takeAwayInput == "none"){
            $dineIn = FALSE;
            $takeAway = 0;
        } 

        //insert order to database
        $shoppingCart->insertOrder(1, $dineIn, $takeAway, TRUE);
        
        // return 'INPUT ORDER SUCCESS';
        return redirect()->route('Profile');
    }

    //this one need validationr if both data is null
    public function shoppingCart(Request $request){
        $shoppingCart = new ShoppingCart();
        $dineIn = null;
        $takeAway = null;
        $allInput = $request->input();
        unset($allInput['_token']);

        foreach($allInput as $key=>$value){
            if($key == "dineInOption"){
                $dineIn = $value;
            }else{
                $takeAway = $value;
            }
        }

        
        if($dineIn != null && $takeAway != null){
            $orders = [['MenuItem'=> $dineIn],['MenuItem'=> $takeAway]];
            session(['OrderTotal' => 2]);
            session(['DineIn' => TRUE]);
            session(['TakeAway' => $takeAway]);
        }else if($dineIn != null && $dineIn){
            $orders = [['MenuItem'=> $dineIn]];
            session(['OrderTotal' => 1]);
            session(['DineIn' => TRUE]);
            session(['TakeAway' => 'none']);
        }else if($takeAway != null){
            $orders = [['MenuItem'=> $takeAway]] ;
            session(['OrderTotal' => 1]);
            session(['DineIn' => FALSE]);
            session(['TakeAway' => $takeAway]);
        }

        return view('cms.page.greenate_shopping_cart', [
            'title' => 'Greenate Shopping Cart',
            'orders' => $orders,
            'takeAway' => $takeAway,
            'dineIn' => $dineIn
        ]);
    }
    
}
