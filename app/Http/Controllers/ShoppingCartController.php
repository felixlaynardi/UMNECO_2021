<?php

namespace App\Http\Controllers;

use App\Mail\OrderEmail;
use App\Models\ShoppingCart;
use App\Models\Ecofriends;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ShoppingCartController extends Controller
{

    public function menu(Request $request)
    {
        if (!session()->has('user')) {
            return redirect()->route('loginView');
        } else {
            $model = new Ecofriends();
            $data = $model->getEcoFriendsByEmail($request->session()->get('user'));
            if($data->ordered != TRUE){
                return view('cms.page.greenate_menu', [
                    'title' => 'Greenate Menu'
                ]);
            }else{
                return redirect()->route('profileView');
            }
            
        }
    }

    public function orderSubmit(Request $request)
    {
        $ecoFriend = new Ecofriends();
        $shoppingCart = new ShoppingCart();
        $ecoFriendData = $ecoFriend->getEcoFriendsByEmail($request->session()->get('user'));

        $dineInStatus =  $request->input('dineIn');
        $takeAwayInput =  $request->input('takeAway');
        $totalOrdered =  $request->input('TotalOrdered');

        if($dineInStatus == "True" && $takeAwayInput != "none"){
            $dineIn = TRUE;
            switch($takeAwayInput){
                case "Alter":
                    $takeAway = 2;
                    if($ecoFriendData->is_internal){
                        $data['receiptImg'] = "https://i.imgur.com/yqHO6op.png";
                    }else{
                        $data['receiptImg'] = "https://i.imgur.com/ZzYlkUi.png";
                    }
                    break;
                case "Exhort":
                    $takeAway = 1;
                    if($ecoFriendData->is_internal){
                        $data['receiptImg'] = "https://i.imgur.com/NkuueAv.png";
                    }else{
                        $data['receiptImg'] = "https://i.imgur.com/ZzYlkUi.png";
                    }
                    break;
                case "Tidbit":
                    $takeAway = 3;
                    if($ecoFriendData->is_internal){
                        $data['receiptImg'] = "https://i.imgur.com/Bq0vopq.png";
                    }else{
                        $data['receiptImg'] = "https://i.imgur.com/ZzYlkUi.png";
                    }
                    break;
            }
        }else if($takeAwayInput != "none" && $dineInStatus == "False"){
            $dineIn = FALSE;
            switch($takeAwayInput){
                case "Alter":
                    $takeAway = 2;
                    if($ecoFriendData->is_internal){
                        $data['receiptImg'] = "https://i.imgur.com/74lJsxg.png";
                    }else{
                        $data['receiptImg'] = "https://i.imgur.com/2KHvSJ4.png";
                    }
                    break;
                case "Exhort":
                    $takeAway = 1;
                    if($ecoFriendData->is_internal){
                        $data['receiptImg'] = "https://i.imgur.com/08kIz9y.png";
                    }else{
                        $data['receiptImg'] = "https://i.imgur.com/2KHvSJ4.png";
                    }
                    break;
                case "Tidbit":
                    $takeAway = 3;
                    if($ecoFriendData->is_internal){
                        $data['receiptImg'] = "https://i.imgur.com/sNGvqkf.png";
                    }else{
                        $data['receiptImg'] = "https://i.imgur.com/2KHvSJ4.png";
                    }
                    break;
            }
        }else if($dineInStatus == "True" && $takeAwayInput == "none"){
            $dineIn = TRUE;
            $takeAway = 0;
            if($ecoFriendData->is_internal){
                $data['receiptImg'] = "https://i.imgur.com/iKMx3Jq.png";
            }else{
                $data['receiptImg'] = "https://i.imgur.com/uAb3Jhd.png";
            }
        }

        $data['userName'] = $ecoFriendData->full_name;
        $data['email'] = $ecoFriendData->email;

        //insert order to database
        $shoppingCart->insertOrder($request->session()->get('userID'), $dineIn, $takeAway);

        $this->sendEmail($data);
        // return to profile;
        return redirect()->route('profileView');
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
            $orders = [['MenuItem'=> $dineIn,'Subtotal' => 2],['MenuItem'=> $takeAway, 'Subtotal' => 1]];
            session()->put('OrderTotal', 2);
            session()->put('DineIn', TRUE);
            session()->put('TakeAway', $takeAway);
            $totalSKKM = 3;
        }else if($dineIn != null && $dineIn){
            $orders = [['MenuItem'=> $dineIn, 'Subtotal' => 1]];
            session()->put('OrderTotal', 1);
            session()->put('DineIn', TRUE);
            session()->put('TakeAway', 'none');
            $totalSKKM = 2;
        }else if($takeAway != null){
            $orders = [['MenuItem'=> $takeAway, 'Subtotal' => 1]] ;
            session()->put('OrderTotal', 1);
            session()->put('DineIn', FALSE);
            session()->put('TakeAway', $takeAway);
            $totalSKKM = 1;
        }

        return view('cms.page.greenate_shopping_cart', [
            'title' => 'Greenate Shopping Cart',
            'orders' => $orders,
            'takeAway' => $takeAway,
            'dineIn' => $dineIn,
            'skkm' => $totalSKKM
        ]);
    }

    public function sendEmail($data)
    {
        $details = [
            'title' => '[GREENATE: ORDER SUCCESSFUL]',
            'name' => $data['userName'],
            'receipt' => $data['receiptImg']
        ];
        Mail::to($data['email'])->send(new OrderEmail($details));
    }
    
}
