@extends('front.index')

@section('content')
<section id="main" role="main" class="clearfix">
   <div class="margin">
      <div class="content-wrap clearfix">
         <div id="content" class="clearfix">
            <article id="post-18" class="post-18 page type-page status-publish hentry">
               <div class="entry">
                  <div class="postcontent">
                     <div class="woocommerce">
                        <div class="woocommerce-notices-wrapper"></div>
                        <form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">
                           <p>If you have a coupon code, please apply it below.</p>
                           <p class="form-row form-row-first">
                              <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="">
                           </p>
                           <p class="form-row form-row-last">
                              <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                           </p>
                           <div class="clear"></div>
                        </form>
                        <div class="woocommerce-notices-wrapper"></div>
                        <form name="checkout" id="checkout_form" method="post" class="checkout woocommerce-checkout" action="{{ url('/') }}/checkout/" enctype="multipart/form-data" novalidate="novalidate">
                        	@csrf
                           <div class="col2-set" id="customer_details">
                              <div class="col-1">
                                 <div class="woocommerce-billing-fields">
                                    <h3>Billing details</h3>
                                    <div class="woocommerce-billing-fields__field-wrapper">
                                       <p class="form-row form-row-first validate-required" id="billing_first_name_field" data-priority="10"><label for="billing_first_name" class="">First name&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="" autocomplete="given-name"></span></p>
                                       <p class="form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20"><label for="billing_last_name" class="">Last name&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value="" autocomplete="family-name"></span></p>
                                       <p class="form-row form-row-wide" id="billing_company_field" data-priority="30"><label for="billing_company" class="">Company name&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" value="" autocomplete="organization"></span></p>
                                       <p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field" data-priority="40">
                                          <label for="billing_country" class="">Country&nbsp;<abbr class="required" title="required">*</abbr></label>
                                          <span class="woocommerce-input-wrapper">
                                             <select name="billing_country" id="billing_country" class="country_to_state country_select  select2-hidden-accessible" autocomplete="country" tabindex="-1" aria-hidden="true">
                                                <option value="">Select a country…</option>
                                                <option value="CA">Canada</option>
                                                <option value="US">United States (US)</option>
                                             </select>
                                             <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-billing_country-container" role="combobox"><span class="select2-selection__rendered" id="select2-billing_country-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder"></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                       <noscript><button type="submit" name="woocommerce_checkout_update_totals" value="Update country">Update country</button></noscript></span></p>
                                       <p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50"><label for="billing_address_1" class="">Street address&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="House number and street name" value="" autocomplete="address-line1"></span></p>
                                       <p class="form-row form-row-wide address-field" id="billing_address_2_field" data-priority="60"><label for="billing_address_2" class="screen-reader-text">Apartment, suite, unit etc. (optional)&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="" autocomplete="address-line2"></span></p>
                                       <p class="form-row form-row-wide address-field validate-required" id="billing_city_field" data-priority="70"><label for="billing_city" class="">Town / City&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="" value="" autocomplete="address-level2"></span></p>
                                       <p class="form-row form-row-wide address-field validate-required validate-state" id="billing_state_field" data-priority="80">
                                          <label for="billing_state" class="">State&nbsp;<abbr class="required" title="required">*</abbr></label>
                                          <span class="woocommerce-input-wrapper">
                                             <input type="text" class="input-text " name="billing_state" id="billing_state" placeholder="" value="" autocomplete="given-state">
                                             <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-billing_state-container" role="combobox"><span class="select2-selection__rendered" id="select2-billing_state-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder"></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                          </span>
                                       </p>
                                       <p class="form-row form-row-wide address-field validate-required validate-postcode" id="billing_postcode_field" data-priority="90"><label for="billing_postcode" class="">ZIP&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="" value="" autocomplete="postal-code"></span></p>
                                       <p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100"><label for="billing_phone" class="">Phone&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value="" autocomplete="tel"></span></p>
                                       <p class="form-row form-row-wide validate-required validate-email" id="billing_email_field" data-priority="110"><label for="billing_email" class="">Email address&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value="pvmediocre@gmail.com" autocomplete="email username"></span></p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-2">
                                 <div class="woocommerce-shipping-fields">
                                    <h3 id="ship-to-different-address">
                                       <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                       <input id="ship-to-different-address-checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" type="checkbox" name="ship_to_different_address"> <span>Ship to a different address?</span>
                                       </label>
                                    </h3>
                                    <div class="shipping_address" style="display: block;">
                                       <div class="woocommerce-shipping-fields__field-wrapper">
                                          <p class="form-row form-row-first validate-required" id="shipping_first_name_field" data-priority="10"><label for="shipping_first_name" class="">First name&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="shipping_first_name" id="shipping_first_name" placeholder="" value="" autocomplete="given-name"></span></p>
                                          <p class="form-row form-row-last validate-required" id="shipping_last_name_field" data-priority="20"><label for="shipping_last_name" class="">Last name&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="shipping_last_name" id="shipping_last_name" placeholder="" value="" autocomplete="family-name"></span></p>
                                          <p class="form-row form-row-wide" id="shipping_company_field" data-priority="30"><label for="shipping_company" class="">Company name&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="shipping_company" id="shipping_company" placeholder="" value="" autocomplete="organization"></span></p>
                                          <p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="shipping_country_field" data-priority="40">
                                             <label for="shipping_country" class="">Country&nbsp;<abbr class="required" title="required">*</abbr></label>
                                             <span class="woocommerce-input-wrapper">
                                                <select name="shipping_country" id="shipping_country" class="country_to_state country_select  select2-hidden-accessible" autocomplete="country" tabindex="-1" aria-hidden="true">
                                                   <option value="">Select a country…</option>
                                                   <option value="CA">Canada</option>
                                                   <option value="US">United States (US)</option>
                                                </select>
                                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-shipping_country-container" role="combobox"><span class="select2-selection__rendered" id="select2-shipping_country-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder"></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                          <noscript><button type="submit" name="woocommerce_checkout_update_totals" value="Update country">Update country</button></noscript></span></p>
                                          <p class="form-row form-row-wide address-field validate-required" id="shipping_address_1_field" data-priority="50"><label for="shipping_address_1" class="">Street address&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="shipping_address_1" id="shipping_address_1" placeholder="House number and street name" value="" autocomplete="address-line1"></span></p>
                                          <p class="form-row form-row-wide address-field" id="shipping_address_2_field" data-priority="60"><label for="shipping_address_2" class="screen-reader-text">Apartment, suite, unit etc. (optional)&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="shipping_address_2" id="shipping_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="" autocomplete="address-line2"></span></p>
                                          <p class="form-row form-row-wide address-field validate-required" id="shipping_city_field" data-priority="70"><label for="shipping_city" class="">Town / City&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="shipping_city" id="shipping_city" placeholder="" value="" autocomplete="address-level2"></span></p>
                                          <p class="form-row form-row-wide address-field validate-required validate-state" id="shipping_state_field" data-priority="80">
                                             <label for="shipping_state" class="">State&nbsp;<abbr class="required" title="required">*</abbr></label>
                                             <span class="woocommerce-input-wrapper">
                                                <input type="text" class="input-text " name="shipping_state" id="shipping_state" placeholder="" value="" autocomplete="given-state">
                                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-shipping_state-container" role="combobox"><span class="select2-selection__rendered" id="select2-shipping_state-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder"></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                             </span>
                                          </p>
                                          <p class="form-row form-row-wide address-field validate-required validate-postcode" id="shipping_postcode_field" data-priority="90"><label for="shipping_postcode" class="">ZIP&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="shipping_postcode" id="shipping_postcode" placeholder="" value="" autocomplete="postal-code"></span></p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="woocommerce-additional-fields">
                                    <div class="woocommerce-additional-fields__field-wrapper">
                                       <p class="form-row notes" id="order_comments_field" data-priority=""><label for="order_comments" class="">Order notes&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea></span></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <h3 id="order_review_heading">Your order</h3>
                           <div id="order_review" class="woocommerce-checkout-review-order">
                              <table class="shop_table woocommerce-checkout-review-order-table">
                                 <thead>
                                    <tr>
                                       <th class="product-name">Product</th>
                                       <th class="product-total">Total</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 	@if(Session::has('cart'))
                                 		@foreach(Session::get('cart') as $key => $value)
                                 			<tr class="cart_item">
		                                       <td class="product-name">
		                                          	{{ $value['name'] }}<strong class="product-quantity"> × {{ $value['quantity'] }}</strong>													
		                                       </td>
		                                       	<td class="product-total">
	                                         	 	<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ $value['subtotal'] }}</span>						
		                                       	</td>
		                                    </tr>
                                 		@endforeach
                                 	@endif
                                    
                                 </tbody>
                                 <tfoot>
                                    <tr class="cart-subtotal">
                                       <th>Subtotal</th>
                                       <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ Session::get('cart_total') }}</span></td>
                                    </tr>
                                    <tr class="woocommerce-shipping-totals shipping">
                                       <th>Shipping</th>
                                       <td data-title="Shipping">
                                          $10 for International Shipping.
                                       </td>
                                    </tr>
                                    <tr class="order-total">
                                       <th>Total</th>
                                       <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ Session::get('cart_total')+10 }}</span></strong> </td>
                                    </tr>
                                 </tfoot>
                              </table>
                             	 <h3 id="order_review_heading">Payment</h3>
                              	<div id="payment" class="woocommerce-checkout-payment">
                              		<br>
                              		<div id="card-element">
					       				
							    	</div>
							    	<br>
                              	</div>
                              	<br>
                              <button type="submit" id="btnPlaceOrder" class="button alt">Place Order</button>
                        </form>
                     </div>
                  </div>
               </div>
            </article>
         </div>
         <aside id="sidebar" class="sidebar">
            <div id="recent-posts-6" class="widget widget-container widget-sidebar widget_recent_entries">
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