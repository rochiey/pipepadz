<header id="header" role="banner" class="clearfix">
    <div id="headerTitle" class="margin clearfix <?php if(Request::path() == '/') echo 'headertitlehide'; ?>">
        <h1>@if(Request::segment(2) == 'product-category') {{ ucwords(str_replace('-', ' ', Request::segment(3))).'" PipePadz' }} @else {{ ucwords(str_replace('-', ' ', Request::segment(1))) }} @endif</h1>
    </div>
</header>