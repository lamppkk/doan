<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title(); ?></title>
    
    <?php wp_head() ?>
    
	<meta charset="utf-8" />
	
    <base href="<?php echo bloginfo('stylesheet_directory').'/'?>" />
    
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url"); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo("stylesheet_directory").'/css/css.css'; ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo("stylesheet_directory").'/css/search.css'; ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo("stylesheet_directory").'/css/sidebar-home.css'; ?>" />
    
	<script src="<?php echo bloginfo('stylesheet_directory').'/js/jquery.min.js' ?>"> </script>
	<script src="<?php echo bloginfo('stylesheet_directory').'/js/js.js' ?>"> </script>

</head>
<body>

<!-- FACEBOOK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<?php 
	$options = get_option('hcv-option');
?>


<div id="wrap-top-header" class="wrap-full regular-font">
    <div id="top-header" class="full">
        <?php dynamic_sidebar('top-header') ?>
    </div>
    <div class="clear"></div>
</div>

<header id="header" class="full">
    <a href="<?php echo home_url() ?>"><img class="floatl logo" src="<?php echo bloginfo('template_directory').'/images/logo.png' ?>" /></a>
    <?php if(is_home()) : ?>
    <?php get_search_form() ?>
    <div id="top-cart"><span class="cart color-444444 MyriadPro-Bold uppercase">Giỏ hàng :</span><a href="#"><img src="<?php echo bloginfo('template_directory').'/images/cart_icon.png'; ?>" /> </a> <span class="num MyriadPro-Bold">0 Sản phẩm</span></div>
    <div class="clear"></div>
    <?php else: ?>
    <div class="floatr" id="category-banner">
        <?php dynamic_sidebar('category-banner') ?>
    </div>
    <?php endif; ?>
    
    <?php if(!is_home())  : ?>
        
    <?php endif; ?>
</header><!-- END #header -->
<div class="clear"></div>





	

