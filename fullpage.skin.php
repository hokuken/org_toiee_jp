  <head>
      #{$meta_content_type}
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>#{$this_page_title}</title>
      <meta name="keywords" content="#{$keywords}" />
      <meta name="description" content="#{$description}" />
      <link rel="alternate" type="application/rss+xml" title="RSS" href="#{$rss_link}" />
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
      <nav id="navigator" class="navbar-default" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#{$qhm_dir}">
              <?php if (hv('logo_type', true)) : ?>
                <img src="<?php echo hv('logo_img'); ?>">
              <?php else: ?>
                <?php echo hv('logo_text'); ?>
              <?php endif ; ?>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            #{$site_navigator}
          </div>
        </div>
      </nav>
      <!-- ◆ Header ◆ ========================================================= -->
      <header class="haik-eyecatch-top" role="banner">
        #{$main_visual}
      </header>
      <!-- ◆ Content ◆ ========================================================= -->
      <div class="container-fluid">
        <div class="haik-container haik-fullpage" role="main">
          #{$body}
        </div>
        #{$summary}
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
      <script type="text/javascript" src="#{$style_path}skin.js"></script>
  </body>
</html>
