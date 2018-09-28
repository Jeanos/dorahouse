<?php
/**
 * Page Template
 *
 * Please do not edit this file. This file is part of the Cyber Chimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category CyberChimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v3.0 (or later)
 * @link     http://www.cyberchimps.com/
 */
 
get_header(); ?>

<?php do_action( 'cyberchimps_before_container'); ?>

<?php do_action( 'cyberchimps_page_content' ); ?>

<?php get_sidebar('home'); ?>

<?php do_action( 'cyberchimps_after_container'); ?>

<?php get_footer(); ?>
