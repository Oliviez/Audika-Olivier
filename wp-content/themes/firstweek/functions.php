<?php
/**
 * @package WordPress
 * @subpackage fw
 * @since fw 1.0
 */

 require get_template_directory() . '/inc/setup.php';

 require get_template_directory() . '/inc/enqueue.php';

 require get_template_directory() . '/inc/remove_head_login.php';


 flush_rewrite_rules();
