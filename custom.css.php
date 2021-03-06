<style>
<?php if(hv('web_font_enable', true)) : ?>
@font-face {
  font-family: <?php hv('web_font_name'); ?>;
  src: url('<?php hv('web_font_url'); ?>') format('<?php hv('web_font_type'); ?>');
}
<?php endif; ?>

/*


	Base custom styling


*/

body{
  <?php if (hv('custom_color_enable', true) || !isset($config['custom_options']['body_base_color']['value'])): ?>
    background-color: <?php echo hv('body_base_color'); ?>;
  <?php else: ?>
    background-color: <?php echo $config['custom_options']['body_base_color']['value']; ?>;
  <?php endif; ?>
}
.navbar-default{
  <?php if (hv('custom_color_enable', true) || !isset($config['custom_options']['nav_base_color']['value'])): ?>
    background-color: <?php echo hv('nav_base_color'); ?>;
  <?php else: ?>
    background-color: <?php echo $config['custom_options']['nav_base_color']['value']; ?>;
  <?php endif; ?>
}
.haik-footer{
  <?php if (hv('custom_color_enable', true) || !isset($config['custom_options']['footer_base_color']['value'])): ?>
    background-color: <?php echo hv('footer_base_color'); ?>;
  <?php else: ?>
    background-color: <?php echo $config['custom_options']['footer_base_color']['value']; ?>;
  <?php endif; ?>
}

body, h1, h2, h3, h4, h5, h6 {
	font-family: <?php echo hv('body_font'); ?>;
}

/*


	Navigation custom styling


*/
<?php if (hv('logo_type', true)) : ?>
	.navbar-brand img{
		height: 50px;
    padding: 3px;
	}

	.navbar-brand {
		padding: 0;
	}
<?php endif ; ?>

.navbar-toggle {
	border-radius: 0;
}

<?php if (hv('eyecatch_type', true)): ?>
/*


    Eyecatch custom styling


*/

.haik-eyecatch-top > .qhm-eyecatch > .qhm-section > div > div,
.haik-eyecatch-main > .qhm-eyecatch > .qhm-section > div > div {
  display: inline-block;
  width: auto;
  max-width: none;
  padding: 30px;
  background-color: rgba(255, 255, 255, 0.5);
}

<?php endif; ?>

</style>
