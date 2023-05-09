<?php get_header();
// variable 
$featureImage = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "large");
$courseSyllabusData = get_field("course_syllabus");
$courseSyllabusTitle = get_field("course_syllabus_title");
$courseSyllabusSubtitle = get_field("course_syllabus_subtitle");
$courseFeatures = get_field("course_features");
$courseFeaturesImage=get_field("course_fearure_image")["url"];
?>
<section class="cid-rSVDy2bCKN mbr-parallax-background" id="header5-23" style="background: url(<?php echo
                                                                                                $featureImage[0] ?>);
background-repeat: no-repeat;
    background-size: cover;
;">
    <div class="mbr-overlay" style="background-color: rgb(0, 0, 0); opacity: 0.4;"></div>

    <div class="container align-left">
        <div class="row justify-content-center">
            <div class="mbr-black col-md-12 col-lg-12">

                <h1 class="mbr-section-title mbr-bold mbr-white pb-5 mbr-fonts-style display-1"><span><?php the_title() ?><span></h1>
                <div class="mbr-text pb-4 mbr-white mbr-regular mbr-fonts-style display-7 course_excerpt "><?php the_excerpt() ?></div>
                <div class="mbr-section-btn">
                    <a class="btn btn-md btn-info display-4" href="family.html#form5-2m">GET STARTED</a>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="accordion1 cid-rSVTpuaoUu" id="accordion1-2u">




    <div class="container">
        <div class="wrapper">
            <div class="row">

                <div class="mbr-black col-md-12 md-pb col-lg-6">
                    <h4 class="mbr-section-subtitle align-left mbr-regular mbr-fonts-style display-4">WELCOME NOTE</h4>
                    <h3 class="mbr-section-title align-left mbr-bold mbr-white pb-2 mbr-fonts-style display-2"><?php echo $courseSyllabusTitle; ?><h3>
                            <p class="mbr-text pb-4 mbr-white align-left mbr-regular mbr-fonts-style display-7">
                                <?php echo $courseSyllabusSubtitle; ?>
                            </p>
                            <div class="mbr-section-btn"><a class="btn btn-md btn-info display-4" href="https://mobirise.co">READ MORE</a>
                            </div>



                </div>


                <div class="col-12 col-md-12 col-lg-6">


                    <div id="bootstrap-accordion_24" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                        <?php
                        $key = 0;
                        foreach ($courseSyllabusData as  $value) {
                            $key = $key + 1;
                        ?>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a role="button" class="panel-title collapsed" data-toggle="collapse" data-core="" href="#collapse1_<?php echo $key ?>" aria-expanded="false" aria-controls="collapse1">
                                        <h5 class="mbr-fonts-style display-5">
                                            <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                                            <?php echo $value["accordian_title"] ?>
                                        </h5>
                                    </a>
                                </div>
                                <div id="collapse1_<?php echo $key; ?>" class="panel-collapse noScroll collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_24">
                                    <div class="panel-body">
                                        <?php echo $value["accordian_content"] ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                            # code...
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content2 cid-rSVTnIM6t1" id="content2-2s">
    <div class="container-fluid">
        <div class="row">
            <div class="card col-12 img-col col-md-12 col-lg-6">
                <img src="<?php echo $courseFeaturesImage ?>" alt="Mobirise">

            </div>
            <div class="card col-12 col-md-12 col-lg-6">


                <div class="wrapper">

                    <h3 class="mbr-section-subtitle  align-left mbr-regular mbr-white mbr-fonts-style display-4">
                        WELCOME NOTE</h3>

                    <h4 class="card-title mbr-bold pb-3  align-left mbr-white mbr-fonts-style display-2">

                        Main features of this course</h4>

                    <div class="link-wrap">
                        <?php
                        foreach ($courseFeatures as  $feature) {
                        ?>
                            <h5 class="link mbr-black mbr-fonts-style display-7"><?php echo $feature["feature"] ?></h5>
                        <?php
                            # code...
                        }
                        ?>

                    </div>
                    <div class="img-wrap">

                        <div class="img">
                            <img src="https://mobirise.com/extensions/therapym4/assets/images/1.png">
                        </div>
                        <div class="img">
                            <img src="https://mobirise.com/extensions/therapym4/assets/images/2.png">
                        </div>
                        <div class="img">
                            <img src="https://mobirise.com/extensions/therapym4/assets/images/3.png">
                        </div>
                        <div class="img">
                            <img src="https://mobirise.com/extensions/therapym4/assets/images/4.png">
                        </div>


                    </div>
                </div>
            </div>




        </div>
    </div>
</section>
<section class="form cid-rSVRz2anNi" id="form5-2m">


    <div class="container">
        <div class="row">



            <div class="mbr-black card col-md-12 col-lg-6">
                <div class="col-wrap3">
                    <div class="content align-left mbr-white">
                        <h4 class="mbr-section-subtitle mbr-regular mbr-fonts-style display-4">
                            <div><span style="color: inherit; font-size: 0.9rem; letter-spacing: 0.2rem;">IT'S NEVER TOO LATE</span><br></div>
                        </h4>
                        <h3 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-2">In the beginning</h3>
                        <p class="mbr-text pb-3 mbr-regular mbr-fonts-style display-7">Duis aute irure dolor in reprehenderit in
                            voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aligua esse.&nbsp;<br></p>
                        <div class="mbr-section-btn"><a class="btn btn-md btn-info display-4" href="https://mobirise.co">READ MORE</a></div>

                    </div>
                </div>
            </div>





            <div class="mbr-black card col-md-12 col-lg-6">

                <img src="https://mobirise.com/extensions/therapym4/assets/images/background1.jpg" alt="Mobirise">
            </div>
        </div>
    </div>
</section>
<section class="contacts4 cid-rSVRFjiD4U" id="contacts4-2n">




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">

                <h4 class="main-title align-center pb-4 mbr-semibold mbr-black mbr-fonts-style display-2">Contacts</h4>

            </div>

            <div class="card p-3 col-12 col-md-4 col-lg-4">
                <div class="card-wrapper">


                    <div class="card-box align-left">
                        <h3 class="mbr-section-subtitle align-left mbr-regular mbr-black mbr-fonts-style display-4">
                            VISIT
                            US</h3>

                        <h4 class="card-title align-left pb-1 mbr-semibold mbr-black mbr-fonts-style display-5">
                            Office center</h4>
                        <p class="mbr-text  mbr-fonts-style display-7">
                            <br><?php genralSettings("address") ?>
                            <br>
                            <br><?php genralSettings("email") ?>&nbsp;<br><a href="tel:<?php genralSettings("mobileNumber")?>"><?php genralSettings("mobileNumber")?></a>
                        </p>

                        <div class="link-wrap">



                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-8">
                <div class="google-map"><iframe frameborder="0" style="border:0;width:100%;height: 300px;" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAEIpgj38KyLFELm2bK9Y7krBkz1K-cMq8&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw" allowfullscreen=""></iframe></div>
            </div>
        </div>
</section>


<?php get_footer() ?>