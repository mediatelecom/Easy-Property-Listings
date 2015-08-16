<?php

	/**
	 *	check if current post is of epl
	 *	@since 2.2
	 */
	function is_epl_post() {
		return 		in_array(get_post_type(),epl_all_post_types());
	}
	
	/**
	 *	check if viewing a single post of epl
	 *	@since 2.2
	 */
	function is_epl_single() {
		return 		is_singular(epl_all_post_types());
	}
	
	/**
	 *	check for epl post type
	 *	@since 2.2
	 */
	function is_epl_post_type($type) {
		
		return in_array( $type,epl_all_post_types() );

	}
	
	/**
	 *	check if current post is of epl
	 *	@since 2.2
	 */
	function is_epl_post_archive() {
		
		$epl_posts  = epl_get_active_post_types();
		$epl_posts	= array_keys($epl_posts);
		$epl_posts 	= apply_filters('epl_additional_post_types',$epl_posts);
		return 		is_post_type_archive($epl_posts);
	}
	
	/**
	 *	list of all epl cpts 
	 *	@since 2.4
	 */
	function epl_all_post_types() {
		
		$epl_posts  = epl_get_active_post_types();
		$epl_posts	= array_keys($epl_posts);
		return apply_filters('epl_additional_post_types',$epl_posts);
	}
	
	
	
	

	

