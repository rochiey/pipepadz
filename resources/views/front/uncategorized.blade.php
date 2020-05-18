@extends('front.index')

@section('content')
<section id="main" role="main" class="clearfix">
   <div class="margin">
      <div class="content-wrap clearfix">
         <div id="content" class="clearfix">
            <p class="woocommerce-info">No products were found matching your selection.</p>
         </div>
      </div>
      <aside id="sidebarmini" class="sidebar">
         <div id="woocommerce_product_categories-2" class="widget widget-container widget-sidebar woocommerce widget_product_categories">
            <ul class="product-categories">
               <li class="cat-item cat-item-59"><a href="{{ url('/') }}/shop/product-category/3/">3" PipePadz</a></li>
               <li class="cat-item cat-item-71"><a href="{{ url('/') }}/shop/product-category/4-5/">4.5" PipePadz</a></li>
               <li class="cat-item cat-item-60"><a href="{{ url('/') }}/shop/product-category/4/">4" PipePadz</a></li>
               <li class="cat-item cat-item-140 current-cat"><a href="{{ url('/') }}/shop/product-category/uncategorized/">Uncategorized</a></li>
            </ul>
         </div>
      </aside>
   </div>
</section>
@endsection