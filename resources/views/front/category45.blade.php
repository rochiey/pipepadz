@extends('front.index')

@section('content')
<section id="main" role="main" class="clearfix">
   <div class="margin">
      <div class="content-wrap clearfix">
         <div id="content" class="clearfix">
            <div class="woocommerce-notices-wrapper"></div>
            <p class="woocommerce-result-count">
               Showing all 2 results
            </p>
            <form class="woocommerce-ordering" method="get">
               <select name="orderby" class="orderby" aria-label="Shop order">
                  <option value="popularity">Sort by popularity</option>
                  <option value="date">Sort by latest</option>
                  <option value="price" selected="selected">Sort by price: low to high</option>
                  <option value="price-desc">Sort by price: high to low</option>
                  <option value="onsale">Sort by On Sale: Show first</option>
                  <option value="featured">Sort by Featured: Show first</option>
               </select>
               <input type="hidden" name="paged" value="1">
            </form>
            <ul class="products products-col-4 ">
               <li class="product type-product post-1054 status-publish first instock product_cat-4-5 product_tag-adhesive-coasters product_tag-bong-coasters product_tag-bong-pad product_tag-bong-pads product_tag-bong-padz product_tag-bong-protection product_tag-bong-protectors product_tag-dab-pads product_tag-dab-padz product_tag-glass-bongs product_tag-hookah-protection product_tag-mmj product_tag-pipe-coaster product_tag-pipe-coasters product_tag-pipe-pads product_tag-pipe-padz product_tag-pipepads product_tag-pipepadz product_tag-water-pipe-coasters product_tag-water-pipe-protection product_tag-water-pipe-protectors product_tag-waterpipe-coasters product_tag-waterpipe-protection has-post-thumbnail taxable shipping-taxable purchasable product-type-simple">
                  <a href="{{ url('/') }}/shop/spiral/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                  </a>
                  <div class="product-image-box"><a href="{{ url('/') }}/shop/spiral/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                     </a><a href="{{ url('/') }}/shop/spiral/">
                     <img src="{{ asset('img/Downward-Spiral-Hookah-and-Water-Pipe-Protection2-150x149.jpg') }}" alt="Downward-Spiral-Hookah-and-Water-Pipe-Protection" class="attachment-shop_catalog " width="150" height="149"></a>
                  </div>
                  <h2 class="woocommerce-loop-product__title">SPIRAL | 4.5″</h2>
                  <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>11.99</span></span>
                  <a href="/shop/product-category/4-5/?add-to-cart=1054" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1054" data-product_sku="" aria-label="Add “SPIRAL | 4.5&quot;” to your cart" rel="nofollow">Add to cart</a>
               </li>
               <li class="product type-product post-1049 status-publish instock product_cat-4-5 product_tag-adhesive-coasters product_tag-bong-coasters product_tag-bong-pad product_tag-bong-pads product_tag-bong-padz product_tag-bong-protection product_tag-bong-protectors product_tag-dab-pads product_tag-dab-padz product_tag-glass-bongs product_tag-hookah-protection product_tag-mmj product_tag-pipe-coaster product_tag-pipe-coasters product_tag-pipe-pads product_tag-pipe-padz product_tag-pipepads product_tag-pipepadz product_tag-water-pipe-coasters product_tag-water-pipe-protection product_tag-water-pipe-protectors product_tag-waterpipe-coasters product_tag-waterpipe-protection has-post-thumbnail featured taxable shipping-taxable purchasable product-type-simple">
                  <a href="{{ url('/') }}/shop/eyeball/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                  </a>
                  <div class="product-image-box"><a href="{{ url('/') }}/shop/eyeball/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                     </a><a href="{{ url('/') }}/shop/eyeball/">
                     <img src="{{ asset('img/PipePadz-Eyeball-Bong-Protection--150x150.png') }}" alt="PipePadz-Bong-Protection" class="attachment-shop_catalog " width="150" height="150"></a>
                  </div>
                  <h2 class="woocommerce-loop-product__title">EYEBALL | 4.5″</h2>
                  <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>11.99</span></span>
                  <a href="/shop/product-category/4-5/?add-to-cart=1049" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1049" data-product_sku="" aria-label="Add “EYEBALL | 4.5″” to your cart" rel="nofollow">Add to cart</a>
               </li>
            </ul>
         </div>
      </div>
      <aside id="sidebarmini" class="sidebar">
         <div id="woocommerce_product_categories-2" class="widget widget-container widget-sidebar woocommerce widget_product_categories">
            <ul class="product-categories">
               <li class="cat-item cat-item-59"><a href="{{ url('/') }}/shop/product-category/3/">3" PipePadz</a></li>
               <li class="cat-item cat-item-71 current-cat"><a href="{{ url('/') }}/shop/product-category/4-5/">4.5" PipePadz</a></li>
               <li class="cat-item cat-item-60"><a href="{{ url('/') }}/shop/product-category/4/">4" PipePadz</a></li>
               <li class="cat-item cat-item-140"><a href="{{ url('/') }}/shop/product-category/uncategorized/">Uncategorized</a></li>
            </ul>
         </div>
      </aside>
   </div>
</section>
@endsection