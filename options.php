<?php
/* 	File Paths
	================================================= */
	$imgurl = get_template_directory_uri() . '/admin/images/';
	
	//Access the WordPress Pages via an Array
	$pages = array();
	$pages_obj = get_pages('sort_column=post_parent,menu_order');  
	foreach ( $pages_obj as $key ) { 
		$pages[$key->ID] = ucwords($key->post_title); 
	}

	//Access the WordPress Tags via an Array
	$tags = array();
	$tags_obj = get_tags('orderby=name&hide_empty=false&get=all');
	foreach ( $tags_obj as $key ) { 
		$tags[$key->term_id ] = ucwords($key->name);
	}
	
	
	//Access the WordPress Categories via an Array
	$categories = array();  
	$categories_obj = get_categories('hide_empty=0');
	foreach ( $categories_obj as $key ) {
		$categories[$key->cat_ID] = ucwords($key->cat_name);
	}

/*	Start Admin Options 
	================================================= */
	$options = array();

/*	General
	================================================= */
	

	$options[] = array( "name" => __('General Options','IZTHEME'),
						"type" => "section");
	$options[] = array( "name" => __("Logo","IZTHEME"),
				"desc" => __("Upload logo kích thước 157x186px", "IZTHEME"),
				"id" => THEMEPREFIX."_logo",
				"class" => "medium first",
				"std" => null,
				"type" => "upload");
	// WordPress Editor					
	// $options[] = array( "name" => __("WordPress Editor Field","CURLYTHEMES"),
	// 			"desc" => __("Sed haec quis possit intrepidus aestimare tellus", "CURLYTHEMES"),
	// 			"id" => THEMEPREFIX."_editor",
	// 			"type" => "editor");
?>