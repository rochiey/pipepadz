<header id="header" role="banner" class="clearfix">
    <div id="headerTitle" class="margin clearfix <?php if(Request::path() == '/') echo 'headertitlehide'; ?>">
        <h1>{{ ucwords(str_replace('-', ' ', Request::path())) }}</h1>
    </div>
</header>