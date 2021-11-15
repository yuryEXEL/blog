<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="brand"><?php echo bloginfo('name'); ?></div>
<div class="address-bar"><?php echo bloginfo('description'); ?></div>

<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'header-menu',
                    'container' => 'false',
                    'menu_class' => 'nav navbar-nav',
                ) );
            ?>
        </div>

    </div>
    <!-- /.container -->
</nav>

