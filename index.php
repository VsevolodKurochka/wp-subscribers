<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test_emails
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<h1>Hello, World !</h1>
			<?php 
				vak_subscribers_form(array(
					'action'	=> array(
						'value'	=> get_permalink(4)
					),
					'name'	=> array(
						'exists'			=> 'true',
						'placeholder'	=> 'Name'
					),
					'phone'	=> array(
						'exists'			=> 'true',
						'placeholder'	=> 'Телефон'
					),
					'email'	=> array(
						'exists'			=> 'true',
						'placeholder'	=> 'Имейл'
					),
					'place'	=> array(
						'exists'			=> 'true',
						'value'				=> 'General'
					),
					'submit'	=> array(
						'text'				=> 'Отправить'
					)
				)); 
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();