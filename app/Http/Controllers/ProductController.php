<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function checkProduct(Request $request, $product)
    {
    	if(isset($_GET['add-to-cart']))
		{   
			$cart_total = 0;
			if($request->session()->has('cart'))
			{
				$cart = $request->session()->get('cart');
				$cart_total = $request->session()->get('cart_total');
			}
		    switch ($_GET['add-to-cart']) {
		        case '1':
		        	if(isset($cart[$_GET['add-to-cart']])){
		        		$sub_cart_quantity = $cart[$_GET['add-to-cart']]['quantity'];
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Nautical Star','url' => url('/shop/nautical-star'),'img' => asset('img/PipePadz-Star-Hookah-Water-Pipe-Protection2-150x150.jpg'), 'price' => 7.99, 'quantity' => $sub_cart_quantity+1, 'subtotal' => 7.99*($sub_cart_quantity+1)];
		        		$request->session()->put('cart_total', $cart_total+7.99);
		        	}
		        	else{
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Nautical Star','url' => url('/shop/nautical-star'),'img' => asset('img/PipePadz-Star-Hookah-Water-Pipe-Protection2-150x150.jpg'), 'price' => 7.99, 'quantity' => 1, 'subtotal' => 7.99];
		        		$request->session()->put('cart_total', $cart_total+7.99);
		        	} 
		            break;
		        case '2':
		           	if(isset($cart[$_GET['add-to-cart']])){
		        		$sub_cart_quantity = $cart[$_GET['add-to-cart']]['quantity'];
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Lime','url' => url('/shop/lime'), 'img' => asset('img/Sticky-Lime-Pipe-Protection-150x150.jpg'), 'price' => 7.99, 'quantity' => $sub_cart_quantity+1, 'subtotal' => 7.99*($sub_cart_quantity+1)];
		        		$request->session()->put('cart_total', $cart_total+7.99);
		        	}
		        	else {
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Lime','url' => url('/shop/lime'), 'img' => asset('img/Sticky-Lime-Pipe-Protection-150x150.jpg'), 'price' => 7.99, 'quantity' => 1, 'subtotal' => 7.99];
		        		$request->session()->put('cart_total', $cart_total+7.99);
		        	}
		            break;
		        case '3':
		            if(isset($cart[$_GET['add-to-cart']])){
		        		$sub_cart_quantity = $cart[$_GET['add-to-cart']]['quantity'];
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Squares','url' => url('/shop/squares'), 'img' => asset('img/PipePadz-Squares-Hookah-Water-Pipe-Protection2-150x149.jpg'), 'price' => 9.99, 'quantity' => $sub_cart_quantity+1, 'subtotal' => 9.99*($sub_cart_quantity+1)];
		        		$request->session()->put('cart_total', $cart_total+9.99);
		        	}
		        	else {
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Squares','url' => url('/shop/squares'), 'img' => asset('img/PipePadz-Squares-Hookah-Water-Pipe-Protection2-150x149.jpg'), 'price' => 9.99, 'quantity' => 1, 'subtotal' => 9.99];
		        		$request->session()->put('cart_total', $cart_total+9.99);
		        	}
		            break;
		        case '4':
		            if(isset($cart[$_GET['add-to-cart']])){
		        		$sub_cart_quantity = $cart[$_GET['add-to-cart']]['quantity'];
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Rasta Peace','url' => url('/shop/rasta-peace'), 'img' => asset('img/Rasta-Peace-PipePad-Water-Pipe-Protection-e1365559801450-150x149.jpg'), 'price' => 9.99, 'quantity' => $sub_cart_quantity+1, 'subtotal' => 9.99*($sub_cart_quantity+1)];
		        		$request->session()->put('cart_total', $cart_total+9.99);
		        	}
		        	else {
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Rasta Peace','url' => url('/shop/rasta-peace'), 'img' => asset('img/Rasta-Peace-PipePad-Water-Pipe-Protection-e1365559801450-150x149.jpg'), 'price' => 9.99, 'quantity' => 1, 'subtotal' => 9.99];
		        		$request->session()->put('cart_total', $cart_total+9.99);
		        	}
		            break;
		        case '5':
		            if(isset($cart[$_GET['add-to-cart']])){
		        		$sub_cart_quantity = $cart[$_GET['add-to-cart']]['quantity'];
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Eyeball','url' => url('/shop/eyeball'), 'img' => asset('img/PipePadz-Eyeball-Bong-Protection--150x150.png'), 'price' => 11.99, 'quantity' => $sub_cart_quantity+1, 'subtotal' => 11.99*($sub_cart_quantity+1)];
		        		$request->session()->put('cart_total', $cart_total+11.99);
		        	}
		        	else {
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Eyeball','url' => url('/shop/eyeball'), 'img' => asset('img/PipePadz-Eyeball-Bong-Protection--150x150.png'), 'price' => 11.99, 'quantity' => 1, 'subtotal' => 11.99];
		        		$request->session()->put('cart_total', $cart_total+11.99);
		        	}
		            break;
		        case '6':
		            if(isset($cart[$_GET['add-to-cart']])){
		        		$sub_cart_quantity = $cart[$_GET['add-to-cart']]['quantity'];
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Spiral','url' => url('/shop/spiral'), 'img' => asset('img/Downward-Spiral-Hookah-and-Water-Pipe-Protection2-150x149.jpg'), 'price' => 11.99, 'quantity' => $sub_cart_quantity+1, 'subtotal' => 11.99*($sub_cart_quantity+1)];
		        		$request->session()->put('cart_total', $cart_total+11.99);
		        	}
		        	else {
		        		$cart[$_GET['add-to-cart']] = ['name' => 'Spiral','url' => url('/shop/spiral'), 'img' => asset('img/Downward-Spiral-Hookah-and-Water-Pipe-Protection2-150x149.jpg'), 'price' => 11.99, 'quantity' => 1, 'subtotal' => 11.99];
		        		$request->session()->put('cart_total', $cart_total+11.99);
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
    public function setCart(Request $request)
    {
    	if(isset($_GET['remove_item']))
    	{
    		if($request->session()->has('cart'))
    		{
    			$cart = $request->session()->get('cart');
    			$cart_total = $request->session()->get('cart_total');

    			//get subtotal first to use it
    			$product_subtotal = (float) $cart[$_GET['remove_item']]['subtotal'];
    			$cart_total -= $product_subtotal;

    			//remove from array because the subtotal has been deducted.
    			unset($cart[$_GET['remove_item']]);

    			//set back cart total again
    			$request->session()->put('cart_total', $cart_total);
    			$request->session()->put('cart', $cart);

    			return redirect()->back();
    		}
    	}
    	else return view('front.cart');
    }
    public function updateQty(Request $request)
    {
    	$data = $request->all();
    	foreach ($data['qty'] as $key => $value) {
    		if($value != 0)
    		{
    			if($request->session()->has('cart'))
	    		{
	    			$this->changePriceAccordingToQty($request, $key, $value);
	    		}
    		}
    	}
    	return redirect()->back();
    }
    private function changePriceAccordingToQty($request, $product_id, $quantity_to_add)
    {
    	$cart = $request->session()->get('cart');
		$cart_total = $request->session()->get('cart_total');

		//get subtotal first to use it
		$product_subtotal = (float) $cart[$product_id]['subtotal'];
		$cart_total -= $product_subtotal;

		//set back cart total again
		$cart[$product_id]['quantity'] = $quantity_to_add;
		$price = (float) $cart[$product_id]['price'];
		$new_subtotal = $price*$quantity_to_add;
		$cart[$product_id]['subtotal'] = $new_subtotal;

		$cart_total += $new_subtotal;
		$request->session()->put('cart_total', $cart_total);
		$request->session()->put('cart', $cart);
    }
    public function placeOrder(Request $request)
    {
    	$data[] = $request->all();
    	dd($data);
    }
}
