<?php

namespace App\Http\Controllers;

use App\Models\ShoppingCart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    //
    public function profile()
    {
        return view('cms.page.greenate.profile_dummy');
    }

    public function order()
    {
        $shoppingCartModel = new ShoppingCart();
        $result = $shoppingCartModel->getAllTakeaways();
        return view('cms.page.greenate.order_dummy', [
            'title' => 'Dummy Order Page',
            'Takeaways_Result' => $result
        ]);
    }

    public function orderSubmit(Request $request)
    {
        $shoppingCart = new ShoppingCart();
        $dineIn_choice =  $request->input('dine_in');
        $takeaway_choice =  $request->input('takeaway_id');
        $ordered =  $request->input('ordered');
        
        //insert order to database
        $shoppingCart->insertOrder(1, $dineIn_choice, $takeaway_choice, $ordered);
        
        return 'INPUT ORDER SUCCESS';
        // return redirect()->route('dummyProfile');
    }

    //this one need validationr if both data is null
    public function shoppingCart(Request $request){
        // dd($request->input('WAW'));
        $shoppingCart = new ShoppingCart();
        $dineIn_choice =  $request->input('Dinein_choice');
        // if(!$dineIn_choice){
        //     dd('dineIn tidak ada');
        // }
        $takeaway_choice =  $request->input('Takeaway_choice');

        $takeaway_data = $shoppingCart->getTakeaway($takeaway_choice);
        // dd($takeaway_data[0]->name);
        // if(sizeof($takeaway_data) > 0 && !$dineIn_choice){
        //     $takeaway_data = [];
        //     dd('data tidak ada');
        // }

        // if(sizeof($takeaway_data) > 0 && !$dineIn_choice){
        //     $takeaway_data = [];
        //     dd('data tidak ada');
        // }
        

        return view('cms.page.greenate.shopping_cart', [
            'title' => 'Dummy ShoppingCart Page',
            'orders' => [
                ['MenuItem'=> 'Dine-In', 'Quantity'=>1, 'Subtotal'=>'1SKKM'],
                ['MenuItem'=> $takeaway_data[0]->name, 'Quantity'=>1, 'Subtotal'=>'1SKKM']
            ],
            'takeaway_id' => $takeaway_choice,
            'dine_id' => $dineIn_choice
        ]);
    }
    
}
