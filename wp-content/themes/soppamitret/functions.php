<?php
// Add Theme css and javascripts 
function add_theme_scripts()
{
    $theme_version = wp_get_theme()->get("Version");
    // add theme styles
    wp_enqueue_style("bootstrap", get_theme_file_uri() . "/assets/plugins/bootstrap/bootstrap.min.css", array(), $theme_version, "all");
    wp_enqueue_style("icofont", get_theme_file_uri() . "/assets/plugins/icofont/icofont.min.css", array(), $theme_version, "all");
    wp_enqueue_style("slick", get_theme_file_uri() . "/assets/plugins/slick-carousel/slick/slick.css", array(), $theme_version, "all");
    wp_enqueue_style("slick-theme", get_theme_file_uri() . "/assets/plugins/slick-carousel/slick/slick-theme.css", array(), $theme_version, "all");
    wp_enqueue_style("theme-style", get_theme_file_uri() . "/assets/css/style.css", array(), $theme_version, "all");
    if (is_singular("course")) {
        wp_enqueue_style("course-style", get_theme_file_uri() . "/assets/css/course.css", array(), $theme_version, "all");
    }
    // add javscript file

    // Essential Scripts

    wp_enqueue_script("jquery-js", get_theme_file_uri() . "/assets/plugins/jquery/jquery.js", array(), $theme_version, true);
    wp_enqueue_script("bootstrap-js", get_theme_file_uri() . "/assets/plugins/bootstrap/bootstrap.min.js", array(), $theme_version, true);
    wp_enqueue_script("slick-js", get_theme_file_uri() . "/assets/plugins/slick-carousel/slick/slick.min.js", array(), $theme_version, true);
    wp_enqueue_script("shuffle-js", get_theme_file_uri() . "/assets/plugins/shuffle/shuffle.min.js", array(), $theme_version, true);
    wp_enqueue_script("bootstrap-js", get_theme_file_uri() . "/assets/plugins/bootstrap/bootstrap.min.js", array(), $theme_version, true);

    // Google Map
    wp_enqueue_script("googleapis-map-js", "https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA", array(), $theme_version, true);
    wp_enqueue_script("gmap-js",  get_theme_file_uri() . "/assets/plugins/google-map/gmap.js", array(), $theme_version, true);
    // theme javascript
    wp_enqueue_script("theme-js", get_theme_file_uri() . "/assets/js/script.js", array(), $theme_version, true);
}
add_action("wp_enqueue_scripts", "add_theme_scripts");


// setting for after theme setting ex. feature of theme
 function theme_features()
{
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support("custom-header");
    
}
add_action("after_setup_theme","theme_features");

//general setting for site

function genralSettings($field){
$settings=array(
    "email"=>"soppamitrete@gmail.com",
    "mobileNumber"=>"+91 63548 55227",
    "address"=>"Ahmedabad, India, Gujarat",
    "visonMision"=>"Soppamitrete provides the development, research of  all type of alternative therapy which is present on whole world. and provides education and treatment of this alternate therapies"

);
    echo $settings[$field];
}

// check page / archive page is active or not
 function checkActivePage($pageName)
{
    if(is_page($pageName)){
       echo "active";
    }
    if(is_post_type_archive($pageName))
    {
        echo "active";   
    }
}