<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Health Care Medical Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Novena HTML Template v1.0">

    <!-- theme meta -->
    <meta name="theme-name" content="novena" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" />
    <!-- add wp header file -->
    <?php wp_head(); ?>
</head>

<body id="top">

    <header>
        <div class="header-top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-bar-info list-inline-item pl-0 mb-0">
                            <li class="list-inline-item"><a href="mailto:<?php genralSettings("email")?>"><i class="icofont-support-faq mr-2"></i><?php genralSettings("email")?></a></li>
                            <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i><?php genralSettings("address")?> </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                            <a href="tel:<?php genralSettings("mobileNumber")?>">
                                <span>Call Now : </span>
                                <span class="h4"><?php genralSettings("mobileNumber")?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="<?php echo site_url() ?>">
                    <?php 
                    $headerLogo=get_header_image()
                    ?>
                    <img src="<?php echo $headerLogo ?>" width="200" alt="" class="img-fluid">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarmain">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?php if(checkActivePage("home-page")) ?>"><a class="nav-link" href="<?php echo site_url()?>">Home</a></li>
                        <li class="nav-item <?php if(checkActivePage("about"))  ?> "><a class="nav-link" href="<?php echo site_url("about")?>">About</a></li>
                        <li class="nav-item <?php if(checkActivePage("course"))  ?> "><a class="nav-link" href="<?php echo site_url("courses")?>">Courses</a></li>
                        <li class="nav-item <?php if(checkActivePage("therapy"))  ?> "><a class="nav-link" href="<?php echo site_url("therapies")?>">Therapies</a></li>
                        <li class="nav-item <?php if(checkActivePage("post"))  ?> "><a class="nav-link" href="<?php echo site_url("blogs")?>">Blogs</a></li>
                        <li class="nav-item <?php if(checkActivePage("contact"))  ?> "><a class="nav-link" href="<?php echo site_url("contact")?>">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>