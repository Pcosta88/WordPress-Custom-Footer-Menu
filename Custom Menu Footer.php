

<?php


/**  Name: Custom Menu Footer
    Author: Patrick Costa
    Autor url: www.patcosta.com 
This will create a custom menu. It goes in the functions.php file **/
function register_my_menus() {
	register_nav_menus (
		array(
			'footer-menu' => __('Footer Menu')
			)
		);
}

add_action('init', 'register_my_menus');

?>


<?php 

/** place in footer.php to init new menu **/
wp_nav_menu ( array ('menu' => 'Footer Menu')); ?>


<?php