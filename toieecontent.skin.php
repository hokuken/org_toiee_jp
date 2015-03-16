<head>
    #{$meta_content_type}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>#{$this_page_title}</title>
    <meta name="keywords" content="#{$keywords}" />
    <meta name="description" content="#{$description}" />
    <link rel="alternate" type="application/rss+xml" title="RSS" href="#{$rss_link}" />
    <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:500,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="animate.min.css">       
    #{$bootstrap}
    #{$default_css}
    #{$jquery_script}#{$jquery_cookie_script}
    #{$custom_meta}#{$noindex}#{$external_link}#{$clickpad_js}
    #{$head_tag}
    #{$beforescript}
</head>
<body>
    #{$toolkit_upper}
    <!-- ◆ Navbar ◆ ======================================================= -->
    <nav id="navigator" class="navbar-default toiee-nav" role="navigation">
      <div class="container toiee-container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand toiee-logo" href="#{$qhm_dir}">
            toiee
          </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          #{$site_navigator}
        </div>
      </div>
    </nav>
    <!-- ◆ Content ◆ ========================================================= -->
    <div class="container-fluid">
      <div class="container toiee-container">
        <div class="haik-container haik-default" role="main">
          #{$body}
        </div>
        #{$summary}
      </div>
    </div>
    <!-- ◆ Footer ◆ ========================================================== -->
    <footer class="haik-footer" role="contentinfo">
      <div class="container">
        #{$site_navigator2}
      </div>
    </footer>
    <!-- ■　アクセスタグ■ ============================================== -->
    #{$accesstag_tag}
    #{$lastscript}
</body>
</html>
