<header id="header" role="banner" class="clearfix">
    <div id="headerTitle" class="margin clearfix <?php if(Request::path() == '/') echo 'headertitlehide'; ?>">
        <h1>{{ ucfirst(Request::path()) }}</h1>
    </div>
</header>