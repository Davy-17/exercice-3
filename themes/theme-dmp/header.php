<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 4w4-theme-dmp
 */

?>
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'theme-dmp' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$theme_dmp_description = get_bloginfo( 'description', 'display' );
			if ( $theme_dmp_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $theme_dmp_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<?php
			if(is_front_page()) : ?>
<!-- section pour le carrousel -->
		<section class="carrousel">
			<div>1</div>
			<div>2</div>
			<div>3</div>
		</section>
		<!-- Fin section pour le carrousel -->
		<?php endif ?>
		<!-- bouton du carrousel -->
		<div class="conteneur-bouton">
			<div id="un">1</div>
			<div id="deux">2</div>
			<div id="trois">3</div>
		</div>
<!-- fin bouton du carrousel -->
<!-- bouton burger -->
		<nav id="site-navigation" class="main-navigation">
			<button id="menu" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" onclick="onClickMenu()">
        		<div id="barre1" class="barre"></div>
        		<div id="barre2" class="barre"></div>
        		<div id="barre3" class="barre"></div>
    		</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<!-- Fin bouton burger -->
	</header><!-- #masthead -->
