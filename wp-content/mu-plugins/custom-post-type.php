
<?php
/*
Plugin Name: Custom Post Type
Description: Used by millions, Custom post is quite possibly the best way in the world to <strong>protect your blog from spam</strong>. It keeps your site protected even while you sleep. To get started: activate the Akismet plugin and then go to your Akismet Settings page to set up your API key.
Version: 1.0.0
Author: Mayank Parmar
License: GPLv2 or later
Text Domain: mayank
*/
 function custom_post_type()
{
      register_post_type("course",array(
        "has_archive"=>true,
        "supports"=>array("thumbnail","excerpt","editor","title","author","page-attributes","post-formats"),
        "rewrite"=>array("slug"=>"courses"),
        "public"=>true,
        "show_in_rest"=>true,
        "labels"=>array(
            "name"=>"Courses",
            "add_new_item"=>"Add New Course",
            "edit_item"=>"Edit Course",
            "all_items"=>"All Courses",
            "singular_name"=>"Course"
          ),
          "menu_icon"=>"dashicons-calendar"
      ));
      register_post_type("therapy",array(
        "has_archive"=>true,
        "supports"=>array("thumbnail","excerpt","editor","title","author","page-attributes","post-formats"),
        "rewrite"=>array("slug"=>"therapies"),
        "public"=>true,
        "show_in_rest"=>true,
        "labels"=>array(
            "name"=>"Therapies",
            "add_new_item"=>"Add New Therapy",
            "edit_item"=>"Edit Therapy",
            "all_items"=>"All Therapies",
            "singular_name"=>"Therapy"
          ),
          "menu_icon"=>"dashicons-calendar"
      ));
      register_post_type("product",array(
        "has_archive"=>true,
        "supports"=>array("excerpt","editor","title","author","page-attributes","post-formats"),
        "rewrite"=>array("slug"=>"products"),
        "public"=>true,
        "show_in_rest"=>true,
        "labels"=>array(
            "name"=>"Products",
            "add_new_item"=>"Add New Product",
            "edit_item"=>"Edit Product",
            "all_items"=>"All Products",
            "singular_name"=>"Product"
          ),
          "menu_icon"=>"dashicons-products"
      ));
}
add_action("init","custom_post_type");
?>