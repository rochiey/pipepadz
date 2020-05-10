<div id="banner" class="clearfix">
    <nav id="topnav" class="clearfix">
        <div class="margin">
            <div id="topnavright" class="clearfix">
                <div id="top_phone">Call Toll Free: 888.579.4543</div>
                <ul id="topnavmenu" class="topnavmenu">
                    <li id="menu-item-1028" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1028"><a href="{{ url('/') }}/my-account/"><span class="meta-nav">&rarr; </span>My Account</a></li>
                    <li id="basketlink">
                        <a class="basket" href="{{ url('/') }}/cart/">Your Basket (0)</a>
                        <div id="minicart">
                            <h4 class="minicart-cartcount"><strong>0</strong> items <a class="right" href="{{ url('/') }}/cart/">View Cart &rarr;</a></h4>
                            <div class="widget_shopping_cart">
                                <div class="widget_shopping_cart_content"></div>
                            </div>
                            <a class="miniButton" href="{{ url('/') }}/shop/">Visit Shop</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav id="primary" class="clearfix">
        <div class="margin">
            <h2 id="primarylogo">
               logo here
            </h2>
            <ul id="primaryMenu" class="sf-menu primaryMenu">
                <li id="menu-item-3525" class="menu-item menu-item-type-custom menu-item-object-custom <?php if(Request::path() == '/') echo 'current-menu-item current_page_item'; ?> menu-item-home menu-item-3525"><a href="{{ url('/') }}" aria-current="page">Home</a></li>
                <li id="menu-item-3527" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3527"><a href="{{ url('/') }}/shop/">Shop</a></li>
                <li id="menu-item-3528" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3528 <?php if(Request::path() == 'wholesale') echo 'current-menu-item current_page_item'; ?>"><a href="{{ url('/') }}/wholesale/">Wholesale</a></li>
                <li id="menu-item-3529" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3529"><a href="{{ url('/') }}/faqs/">FAQs</a></li>
                <li id="menu-item-3530" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3530"><a href="{{ url('/') }}/about-us/">About</a></li>
                <li id="menu-item-3531" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3531"><a href="{{ url('/') }}/contact-us/">Contact</a></li>
            </ul>
        </div>
        <div id="mobile_menu">
            <ul id="primaryMenu" class="sf-menu2 primaryMenu sf-js-enabled sf-shadow">
                <li id="menu-item-3525" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3525"><a href="{{ url('/') }}">Home</a></li>
                <li id="menu-item-3527" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3527 sfHover"><a href="{{ url('/') }}/shop/">Shop</a></li>
                <li id="menu-item-3528" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3528"><a href="{{ url('/') }}/wholesale/">Wholesale</a></li>
                <li id="menu-item-3529" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3529"><a href="{{ url('/') }}/faqs/">FAQs</a></li>
                <li id="menu-item-3530" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3530"><a href="{{ url('/') }}/about-us/">About</a></li>
                <li id="menu-item-3531" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3531"><a href="{{ url('/') }}/contact-us/">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div id="social_stickers">
        <p>
            <a href="http://twitter.com/PipePadz" target="_blank" title="Twitter"><img src="{{ asset('img/twitter.png') }}" height="32" width="32"> </a><br><a href="http://instagram.com/PipePadz" target="_blank" title="Instagram"><img src="{{ asset('img/instagram.png') }}" height="32" width="32"> </a><br><a href="http://facebook.com/pipepadz" target="_blank" title="Facebook"><img src="{{ asset('img/facebook.png') }}" height="32" width="32"> </a><br>
        </p>
    </div>
</div>