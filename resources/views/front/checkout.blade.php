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
                        <form name="checkout" method="post" class="checkout woocommerce-checkout" action="{{ url('/') }}/checkout/" enctype="multipart/form-data" novalidate="novalidate">
                           <div class="col2-set" id="customer_details">
                              <div class="col-1">
                                 <div class="woocommerce-billing-fields">
                                    <h3>Billing details</h3>
                                    <div class="woocommerce-billing-fields__field-wrapper">
                                       <p class="form-row form-row-first validate-required" id="billing_first_name_field" data-priority="10"><label for="billing_first_name" class="">First name&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="" autocomplete="given-name" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;"></span></p>
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
                                             <select name="billing_state" id="billing_state" class="state_select  select2-hidden-accessible" autocomplete="address-level1" data-placeholder="Select an option…" tabindex="-1" aria-hidden="true">
                                                <option value="">Select an option…</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District Of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                                <option value="AA">Armed Forces (AA)</option>
                                                <option value="AE">Armed Forces (AE)</option>
                                                <option value="AP">Armed Forces (AP)</option>
                                             </select>
                                             <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-billing_state-container" role="combobox"><span class="select2-selection__rendered" id="select2-billing_state-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select an option…</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                <select name="shipping_state" id="shipping_state" class="state_select  select2-hidden-accessible" autocomplete="address-level1" data-placeholder="Select an option…" tabindex="-1" aria-hidden="true">
                                                   <option value="">Select an option…</option>
                                                   <option value="AL">Alabama</option>
                                                   <option value="AK">Alaska</option>
                                                   <option value="AZ">Arizona</option>
                                                   <option value="AR">Arkansas</option>
                                                   <option value="CA">California</option>
                                                   <option value="CO">Colorado</option>
                                                   <option value="CT">Connecticut</option>
                                                   <option value="DE">Delaware</option>
                                                   <option value="DC">District Of Columbia</option>
                                                   <option value="FL">Florida</option>
                                                   <option value="GA">Georgia</option>
                                                   <option value="HI">Hawaii</option>
                                                   <option value="ID">Idaho</option>
                                                   <option value="IL">Illinois</option>
                                                   <option value="IN">Indiana</option>
                                                   <option value="IA">Iowa</option>
                                                   <option value="KS">Kansas</option>
                                                   <option value="KY">Kentucky</option>
                                                   <option value="LA">Louisiana</option>
                                                   <option value="ME">Maine</option>
                                                   <option value="MD">Maryland</option>
                                                   <option value="MA">Massachusetts</option>
                                                   <option value="MI">Michigan</option>
                                                   <option value="MN">Minnesota</option>
                                                   <option value="MS">Mississippi</option>
                                                   <option value="MO">Missouri</option>
                                                   <option value="MT">Montana</option>
                                                   <option value="NE">Nebraska</option>
                                                   <option value="NV">Nevada</option>
                                                   <option value="NH">New Hampshire</option>
                                                   <option value="NJ">New Jersey</option>
                                                   <option value="NM">New Mexico</option>
                                                   <option value="NY">New York</option>
                                                   <option value="NC">North Carolina</option>
                                                   <option value="ND">North Dakota</option>
                                                   <option value="OH">Ohio</option>
                                                   <option value="OK">Oklahoma</option>
                                                   <option value="OR">Oregon</option>
                                                   <option value="PA">Pennsylvania</option>
                                                   <option value="RI">Rhode Island</option>
                                                   <option value="SC">South Carolina</option>
                                                   <option value="SD">South Dakota</option>
                                                   <option value="TN">Tennessee</option>
                                                   <option value="TX">Texas</option>
                                                   <option value="UT">Utah</option>
                                                   <option value="VT">Vermont</option>
                                                   <option value="VA">Virginia</option>
                                                   <option value="WA">Washington</option>
                                                   <option value="WV">West Virginia</option>
                                                   <option value="WI">Wisconsin</option>
                                                   <option value="WY">Wyoming</option>
                                                   <option value="AA">Armed Forces (AA)</option>
                                                   <option value="AE">Armed Forces (AE)</option>
                                                   <option value="AP">Armed Forces (AP)</option>
                                                </select>
                                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-shipping_state-container" role="combobox"><span class="select2-selection__rendered" id="select2-shipping_state-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select an option…</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                    <tr class="cart_item">
                                       <td class="product-name">
                                          NAUTICAL STAR | 3"&nbsp;							 <strong class="product-quantity">× 1</strong>													
                                       </td>
                                       <td class="product-total">
                                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>7.99</span>						
                                       </td>
                                    </tr>
                                    <tr class="cart_item">
                                       <td class="product-name">
                                          LIME | 3"&nbsp;							 <strong class="product-quantity">× 1</strong>													
                                       </td>
                                       <td class="product-total">
                                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>7.99</span>						
                                       </td>
                                    </tr>
                                    <tr class="cart_item">
                                       <td class="product-name">
                                          SPIRAL | 4.5"&nbsp;							 <strong class="product-quantity">× 1</strong>													
                                       </td>
                                       <td class="product-total">
                                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>11.99</span>						
                                       </td>
                                    </tr>
                                 </tbody>
                                 <tfoot>
                                    <tr class="cart-subtotal">
                                       <th>Subtotal</th>
                                       <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>27.97</span></td>
                                    </tr>
                                    <tr class="woocommerce-shipping-totals shipping">
                                       <th>Shipping</th>
                                       <td data-title="Shipping">
                                          Enter your address to view shipping options.
                                       </td>
                                    </tr>
                                    <tr class="order-total">
                                       <th>Total</th>
                                       <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>27.97</span></strong> </td>
                                    </tr>
                                 </tfoot>
                              </table>
                              <div id="payment" class="woocommerce-checkout-payment">
                                 <ul class="wc_payment_methods payment_methods methods">
                                    <li class="wc_payment_method payment_method_stripe">
                                       <input id="payment_method_stripe" type="radio" class="input-radio" name="payment_method" value="stripe" checked="checked" data-order_button_text="">
                                       <label for="payment_method_stripe">
                                       Credit Card <img src="{{ url('/') }}/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg" class="stripe-visa-icon stripe-icon" alt="Visa"><img src="{{ url('/') }}/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg" class="stripe-amex-icon stripe-icon" alt="American Express"><img src="{{ url('/') }}/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg" class="stripe-mastercard-icon stripe-icon" alt="Mastercard"><img src="{{ url('/') }}/wp-content/plugins/woocommerce-gateway-stripe/assets/images/discover.svg" class="stripe-discover-icon stripe-icon" alt="Discover"><img src="{{ url('/') }}/wp-content/plugins/woocommerce-gateway-stripe/assets/images/jcb.svg" class="stripe-jcb-icon stripe-icon" alt="JCB"><img src="{{ url('/') }}/wp-content/plugins/woocommerce-gateway-stripe/assets/images/diners.svg" class="stripe-diners-icon stripe-icon" alt="Diners">	</label>
                                       <div class="payment_box payment_method_stripe">
                                          <div id="stripe-payment-data" data-email="pvmediocre@gmail.com" data-full-name=" " data-currency="usd">
                                             <fieldset id="wc-stripe-cc-form" class="wc-credit-card-form wc-payment-form" style="background:transparent;">
                                                <div class="form-row form-row-wide">
                                                   <label for="stripe-card-element">Card Number <span class="required">*</span></label>
                                                   <div class="stripe-card-group">
                                                      <div id="stripe-card-element" class="wc-stripe-elements-field StripeElement empty">
                                                         <div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;"><iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeFrame6" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-1fc23f9347df058ee8f7c8e5edaf73f0.html#style[base][iconColor]=%23666EE8&amp;style[base][color]=%2331325F&amp;style[base][fontSize]=15px&amp;style[base][::placeholder][color]=%23CFD7E0&amp;componentName=cardNumber&amp;wait=false&amp;rtl=false&amp;keyMode=live&amp;apiKey=pk_live_Urr1dtCCpjU0PsIj49rOL8D9&amp;origin=https%3A%2F%2Fpipepadz.com&amp;referrer=https%3A%2F%2Fpipepadz.com%2Fcheckout%2F&amp;controllerId=__privateStripeController1" title="Secure payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; height: 18px;"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;"></div>
                                                      </div>
                                                      <i class="stripe-credit-card-brand stripe-card-brand" alt="Credit Card"></i>
                                                   </div>
                                                </div>
                                                <div class="form-row form-row-first">
                                                   <label for="stripe-exp-element">Expiry Date <span class="required">*</span></label>
                                                   <div id="stripe-exp-element" class="wc-stripe-elements-field StripeElement empty">
                                                      <div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;"><iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeFrame7" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-1fc23f9347df058ee8f7c8e5edaf73f0.html#style[base][iconColor]=%23666EE8&amp;style[base][color]=%2331325F&amp;style[base][fontSize]=15px&amp;style[base][::placeholder][color]=%23CFD7E0&amp;componentName=cardExpiry&amp;wait=false&amp;rtl=false&amp;keyMode=live&amp;apiKey=pk_live_Urr1dtCCpjU0PsIj49rOL8D9&amp;origin=https%3A%2F%2Fpipepadz.com&amp;referrer=https%3A%2F%2Fpipepadz.com%2Fcheckout%2F&amp;controllerId=__privateStripeController1" title="Secure payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; height: 18px;"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;"></div>
                                                   </div>
                                                </div>
                                                <div class="form-row form-row-last">
                                                   <label for="stripe-cvc-element">Card Code (CVC) <span class="required">*</span></label>
                                                   <div id="stripe-cvc-element" class="wc-stripe-elements-field StripeElement empty">
                                                      <div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;"><iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeFrame8" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-1fc23f9347df058ee8f7c8e5edaf73f0.html#style[base][iconColor]=%23666EE8&amp;style[base][color]=%2331325F&amp;style[base][fontSize]=15px&amp;style[base][::placeholder][color]=%23CFD7E0&amp;componentName=cardCvc&amp;wait=false&amp;rtl=false&amp;keyMode=live&amp;apiKey=pk_live_Urr1dtCCpjU0PsIj49rOL8D9&amp;origin=https%3A%2F%2Fpipepadz.com&amp;referrer=https%3A%2F%2Fpipepadz.com%2Fcheckout%2F&amp;controllerId=__privateStripeController1" title="Secure payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; height: 18px;"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;"></div>
                                                   </div>
                                                </div>
                                                <div class="clear"></div>
                                                <!-- Used to display form errors -->
                                                <div class="stripe-source-errors" role="alert"></div>
                                                <br>
                                                <div class="clear"></div>
                                             </fieldset>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="wc_payment_method payment_method_paypal">
                                       <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal">
                                       <label for="payment_method_paypal">
                                       PayPal <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" alt="PayPal acceptance mark"><a href="https://www.paypal.com/us/webapps/mpp/paypal-popup" class="about_paypal" onclick="javascript:window.open('https://www.paypal.com/us/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">What is PayPal?</a>	</label>
                                    </li>
                                 </ul>
                                 <div class="form-row place-order">
                                    <noscript>
                                       Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.			<br/><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals">Update totals</button>
                                    </noscript>
                                    <div class="woocommerce-terms-and-conditions-wrapper">
                                       <div class="woocommerce-privacy-policy-text"></div>
                                       <div class="woocommerce-terms-and-conditions" style="display: none; max-height: 200px; overflow: auto;">
                                          <table style="width: 80%" border="0" align="left">
                                             <tbody>
                                                <tr>
                                                   <td>
                                                      <strong>What information do we collect?</strong>We collect information from you when you register on our site, place an order or subscribe to our newsletter.When ordering or registering on our site, as appropriate, you may be asked to enter your: name, e-mail address, mailing address, phone number or credit card information. You may, however, visit our site anonymously.
                                                      <p></p>
                                                      <div>
                                                         <p><strong>What do we use your information for?</strong></p>
                                                         <p>Any of the information we collect from you may be used in one of the following ways:</p>
                                                         <p>To personalize your experience<br>
                                                            (your information helps us to better respond to your individual needs)
                                                         </p>
                                                         <p>To improve our website<br>
                                                            (we continually strive to improve our website offerings based on the information and feedback we receive from you)
                                                         </p>
                                                         <p>To process transactions</p>
                                                         <blockquote>
                                                            <p>Your information, whether public or private, will not be sold, exchanged, transferred, or given to any other company for any reason whatsoever, without your consent, other than for the express purpose of delivering the purchased product or service requested.</p>
                                                         </blockquote>
                                                         <p>To administer a contest, promotion, survey or other site feature</p>
                                                         <p>To send periodic emails</p>
                                                         <blockquote>
                                                            <p>The email address you provide for order processing, may be used to send you information and updates pertaining to your order, in addition to receiving occasional company news, updates, related product or service information, etc.</p>
                                                         </blockquote>
                                                         <p>Note: If at any time you would like to unsubscribe from receiving future emails, we include detailed unsubscribe instructions at the bottom of each email.</p>
                                                         <p><strong>How do we protect your information?</strong></p>
                                                         <p>We implement a variety of security measures to maintain the safety of your personal information when you place an order or enter, submit, or access your personal information.</p>
                                                         <p>We offer the use of a secure server. All supplied sensitive/credit information is transmitted via Secure Socket Layer (SSL) technology and then encrypted into our Payment gateway providers database only to be accessible by those authorized with special access rights to such systems, and are required to?keep the information confidential.</p>
                                                         <p>After a transaction, your private information (credit cards, social security numbers, financials, etc.) will not be stored on our servers.</p>
                                                         <p><strong>Do we disclose any information to outside parties?</strong>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</p>
                                                         <p><strong>Third party links</strong></p>
                                                         <p>Occasionally, at our discretion, we may include or offer third party products or services on our website. These third party sites have separate and independent privacy policies. We therefore have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these sites.</p>
                                                         <p><strong>Your Consent</strong></p>
                                                         <p>By using our site, you consent to our web site privacy policy.</p>
                                                         <p><strong>Changes to our Privacy Policy</strong></p>
                                                         <p>If we decide to change our privacy policy, we will post those changes on this page, and/or update the Privacy Policy modification date below.</p>
                                                         <p>This policy was last modified on 7/19/2012</p>
                                                         <p><strong>Contacting Us</strong></p>
                                                         <p>If there are any questions regarding this privacy policy you may contact us using the <a href="{{ url('/') }}/contact-us/">contact form</a> or the information below.</p>
                                                         <p>www.pipepadz.com<br>
                                                            info@pipepadz.com
                                                         </p>
                                                      </div>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                       <p class="form-row validate-required">
                                          <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                          <input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" name="terms" id="terms">
                                          <span class="woocommerce-terms-and-conditions-checkbox-text">I have read and agree to the website <a href="{{ url('/') }}/privacy-policy/" class="woocommerce-terms-and-conditions-link" target="_blank">terms and conditions</a></span>&nbsp;<span class="required">*</span>
                                          </label>
                                          <input type="hidden" name="terms-field" value="1">
                                       </p>
                                    </div>
                                    <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">Place order</button>
                                    <input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="ec1af23589"><input type="hidden" name="_wp_http_referer" value="/?wc-ajax=update_order_review">	
                                 </div>
                              </div>
                           </div>
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