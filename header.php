<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package project-name
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="initial-scale=1">
	<meta name="viewport" content="maximum-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Round|" rel="stylesheet">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" type="text/css" rel="stylesheet" />


	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>
  data-component="class-toggle"
  data-class-toggle-target-class="menu-open">
	<!-- <div id="mobile-menu-overlay"></div> -->
	<header
    id="main-header"
    class="active"
    data-component="collapsible-header">
    <div class="header__content">
      <button
        id="mobile-menu-trigger"
        data-component="trigger"
        data-trigger-target="body">
        <div>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>
      <a
        id="logo-anchor"
        href="<?php echo get_home_url(); ?>">
        <img class="home-casa-do-estudante--img--bg"
            src="<?php echo get_template_directory_uri() ?>/resources/icons/Logo_horizontal.png"
        />
      </a>

      <nav
        class="header-menu-container"
        id="main-menu-container"
        data-component="menu">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'menu_id'        => 'main-menu',
          ));
        ?>

      </nav>
    </div>
	  
	</header>
