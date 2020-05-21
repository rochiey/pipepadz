<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function checkProduct(Request $request, $product)
    {
    	if(isset($_GET['add-to-cart']))
		{   
			if($request->session()->has('cart'))
			{
				$cart = $request->session()->get('cart');
				$cart_total = $request->session()->get('cart_total');
			}
		    switch ($_GET['add-to-cart']) {
		        case '1':
		        	if(isset($cart[$_GET['add-to-cart']])){
		        		$sub_cart_quantity = $cart[$_GET['add-to-cart']]['quantity'];
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Nautical Star', 'price' => '7.99', 'quantity' => $sub_cart_quantity+1];
		        		$request->session()->put('cart_total', $cart_total+7.99);
		        	}
		        	else{
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Nautical Star', 'price' => '7.99', 'quantity' => 1];
		        		$request->session()->put('cart_total', 7.99);
		        	} 
		            break;
		        case '2':
		           	if(isset($cart[$_GET['add-to-cart']])){
		        		$sub_cart_quantity = $cart[$_GET['add-to-cart']]['quantity'];
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Lime', 'price' => '7.99', 'quantity' => $sub_cart_quantity+1];
		        		$request->session()->put('cart_total', $cart_total+7.99);
		        	}
		        	else {
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Lime', 'price' => '7.99', 'quantity' => 1];
		        		$request->session()->put('cart_total', 7.99);
		        	}
		            break;
		        case '3':
		            if(isset($cart[$_GET['add-to-cart']])){
		        		$sub_cart_quantity = $cart[$_GET['add-to-cart']]['quantity'];
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Squares', 'price' => '9.99', 'quantity' => $sub_cart_quantity+1];
		        		$request->session()->put('cart_total', $cart_total+9.99);
		        	}
		        	else {
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Squares', 'price' => '9.99', 'quantity' => 1];
		        		$request->session()->put('cart_total', 9.99);
		        	}
		            break;
		        case '4':
		            if(isset($cart[$_GET['add-to-cart']])){
		        		$sub_cart_quantity = $cart[$_GET['add-to-cart']]['quantity'];
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Rasta Peace', 'price' => '9.99', 'quantity' => $sub_cart_quantity+1];
		        		$request->session()->put('cart_total', $cart_total+9.99);
		        	}
		        	else {
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Rasta Peace', 'price' => '9.99', 'quantity' => 1];
		        		$request->session()->put('cart_total', 9.99);
		        	}
		            break;
		        case '5':
		            if(isset($cart[$_GET['add-to-cart']])){
		        		$sub_cart_quantity = $cart[$_GET['add-to-cart']]['quantity'];
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Eyeball', 'price' => '11.99', 'quantity' => $sub_cart_quantity+1];
		        		$request->session()->put('cart_total', $cart_total+11.99);
		        	}
		        	else {
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Eyeball', 'price' => '11.99', 'quantity' => 1];
		        		$request->session()->put('cart_total', 11.99);
		        	}
		            break;
		        case '6':
		            if(isset($cart[$_GET['add-to-cart']])){
		        		$sub_cart_quantity = $cart[$_GET['add-to-cart']]['quantity'];
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Spiral', 'price' => '11.99', 'quantity' => $sub_cart_quantity+1];
		        		$request->session()->put('cart_total', $cart_total+11.99);
		        	}
		        	else {
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Spiral', 'price' => '11.99', 'quantity' => 1];
		        		$request->session()->put('cart_total', 11.99);
		        	}
		            break;
		        
		        default:
		            break;
		    }
		    $request->session()->put('cart', $cart);
		    $request->session()->flash('add_to_cart_success', 'Product added to cart.'); 
		    return redirect()->back();
		}
		else
		{
			switch ($product) {
				case 'nautical-star':
					return view('front.nautical_star');
					break;
				case 'lime':
					return view('front.lime');
					break;
				case 'squares':
					return view('front.squares');
					break;
				case 'rasta-peace':
					return view('front.rasta');
					break;
				case 'eyeball':
					return view('front.eyeball');
					break;
				case 'spiral':
					return view('front.spiral');
					break;
				default:
					# code...
					break;
			}
		}
    }
    public function checkCartContent(Request $request)
    {
    	return json_encode($request->session()->get('cart'));
    }
}
