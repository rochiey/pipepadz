<header id="header" role="banner" class="clearfix">
    <div id="headerTitle" class="margin clearfix <?php if(Request::path() == '/') echo 'headertitlehide'; ?>">
        <h1>@if(Request::segment(2) == 'product-category') {{ ucwords(str_replace('-', '.', Request::segment(3))).'" PipePadz' }} @elseif(Request::segment(1) == 'shop') {{ ucwords(str_replace('-', ' ', Request::segment(2))) }} @else {{ ucwords(str_replace('-', ' ', Request::segment(1))) }} @endif</h1>
    </div>
</header>