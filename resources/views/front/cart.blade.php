@extends('front.index')

@section('content')
<section id="main" role="main" class="clearfix">
   <div class="margin">
      <div class="content-wrap clearfix">
         <div id="content" class="clearfix">
            <article id="post-17" class="post-17 page type-page status-publish hentry">
               <div class="entry">
                  <div class="postcontent">
                     <div class="woocommerce">
                        <div class="woocommerce-notices-wrapper"></div>
                        @if(Session::has('cart'))
	                        <form class="woocommerce-cart-form" action="{{ url('/') }}/cart/" method="post">
	                           <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
	                              <thead>
	                                 <tr>
	                                    <th class="product-remove">Remove</th>
	                                    <th class="product-thumbnail">&nbsp;</th>
	                                    <th class="product-name">Product</th>
	                                    <th class="product-price">Price</th>
	                                    <th class="product-quantity">Quantity</th>
	                                    <th class="product-subtotal">Total</th>
	                                 </tr>
	                              </thead>
	                              <tbody>
	                              		@foreach(Session::get('cart') as $key => $cart)
	                              			<tr class="woocommerce-cart-form__cart-item cart_item">
			                                    <td class="product-remove">
			                                       <a href="{{ url('/') }}/cart/?remove_item={{ $key }}" class="remove" aria-label="Remove this item" data-product_id="{{ $key }}" data-product_sku="">x</a>						
			                                    </td>
			                                    <td class="product-thumbnail">
			                                       <a href="{{ $cart['img'] }}"><img width="150" height="150" src="{{ $cart['img'] }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="(max-width: 150px) 100vw, 150px"></a>						
			                                    </td>
			                                    <td class="product-name" data-title="Product">
			                                       <a href="{{ $cart['url'] }}">{{ $cart['name'] }}</a>						
			                                    </td>
			                                    <td class="product-price" data-title="Price">
			                                       <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ $cart['price'] }}</span>						
			                                    </td>
			                                    <td class="product-quantity" data-title="Quantity">
			                                       <div class="quantity">
			                                          <label class="screen-reader-text" for="quantity_{{ $key }}">{{ $cart['name'] }}</label>
			                                          <input type="number" id="quantity_{{ $key }}" class="input-text qty text" step="1" min="0" max="" name="qty[]" value="1" title="Qty" size="4" inputmode="numeric">
			                                       </div>
			                                    </td>
			                                    <td class="product-subtotal" data-title="Total">
			                                       <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ $cart['subtotal'] }}</span>						
			                                    </td>
		                                 	</tr>
	                              		@endforeach
	                                 <tr>
	                                    <td colspan="6" class="actions">
	                                       <!-- <div class="coupon">
	                                          <label for="coupon_code">Coupon:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"> <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
	                                       </div> -->
	                                       <button type="submit" class="button" name="update_cart" value="Update cart" disabled="">Update cart</button>
	                                       <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="029c064471"><input type="hidden" name="_wp_http_referer" value="/cart/">				
	                                    </td>
	                                 </tr>
	                              </tbody>
	                           </table>
	                        </form>
	                        <div class="cart-collaterals">
	                           <div class="cart_totals ">
	                              <h2>Cart totals</h2>
	                              <table cellspacing="0" class="shop_table shop_table_responsive">
	                                 <tbody>
	                                    <tr class="cart-subtotal">
	                                       <th>Subtotal</th>
	                                       <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>9.99</span></td>
	                                    </tr>
	                                    <tr class="woocommerce-shipping-totals shipping">
	                                       <th>Shipping</th>
	                                       <td data-title="Shipping">
	                                          Enter your address to view shipping options.
	                                       </td>
	                                    </tr>
	                                    <tr class="order-total">
	                                       <th>Total</th>
	                                       <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>9.99</span></strong> </td>
	                                    </tr>
	                                 </tbody>
	                              </table>
	                              <div class="wc-proceed-to-checkout">
	                                 <a href="{{ url('/') }}/checkout/" class="checkout-button button alt wc-forward">
	                                 Proceed to checkout</a>
	                              </div>
	                           </div>
	                        </div>
                    	@else
                    		<p class="cart-empty">Your cart is currently empty.</p>
                    		<p class="return-to-shop">
								<a class="button wc-backward" href="{{ url('/') }}/shop/">
									Return to shop		
								</a>
							</p>
                    	@endif
                     </div>
                  </div>
               </div>
            </article>
         </div>
         <aside id="sidebar" class="sidebar">
            <div id="woocommerce_product_categories-3" class="widget widget-container widget-sidebar woocommerce widget_product_categories">
               <h3>Product Categories</h3>
               <ul class="product-categories">
                  <li class="cat-item cat-item-59"><a href="{{ url('/') }}/shop/product-category/3/">3" PipePadz</a></li>
                  <li class="cat-item cat-item-71"><a href="{{ url('/') }}/shop/product-category/4-5/">4.5" PipePadz</a></li>
                  <li class="cat-item cat-item-60"><a href="{{ url('/') }}/shop/product-category/4/">4" PipePadz</a></li>
                  <li class="cat-item cat-item-140"><a href="{{ url('/') }}/shop/product-category/uncategorized/">Uncategorized</a></li>
               </ul>
            </div>
            <div id="recent-posts-2" class="widget widget-container widget-sidebar widget_recent_entries">
               <h3>Recent Posts</h3>
               <ul>
                  <li>
                     <a href="{{ url('/') }}/hempbeach-review/">PIPEPADZ FEATURED ON HEMP BEACH TV</a>
                  </li>
                  <li>
                     <a href="{{ url('/') }}/water-pipe-protection/">THE ULTIMATE WATER PIPE PROTECTION!</a>
                  </li>
                  <li>
                     <a href="{{ url('/') }}/protect/">PROTECTING YOUR GLASS</a>
                  </li>
                  <li>
                     <a href="{{ url('/') }}/washing-your-pipepadz/">WASHING YOUR PIPEPADZ™</a>
                  </li>
                  <li>
                     <a href="{{ url('/') }}/bong-protection/">PIPE COASTERS &amp; BONG PROTECTORS</a>
                  </li>
               </ul>
            </div>
         </aside>
      </div>
   </div>
</section>
@endsection