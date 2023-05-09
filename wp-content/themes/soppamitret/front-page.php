<?php get_header();
$featureImage="../images/bg/22.jpg";
if(get_field("banner_image")){
	$featureImage=get_field("banner_image")["url"];
}
$service_image="../images/bg/22.jpg";
if(get_field("service_image")){
	$service_image=get_field("service_image")["url"];
}
$bannerTitle=get_field("bannr_title");
$bannerWellcome=get_field("banner_welcome_note");
$bannrSubtitle=get_field("banner_subtitle");
$bannrBtn=get_field("banner_button_title");
$bannrBtnURL=get_field("banner_button_url");
$serviseTitle=get_field("our_service_title");
$servisesubTitle=get_field("our_service_title_subtitle");
$serviseurl=get_field("servise_url");

?>
    <!-- Slider Start -->
    <section class="banner" style="background: url(<?php echo $featureImage; ?> no-repeat)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <span class="text-uppercase text-sm letter-spacing "><?php echo $bannerWellcome; ?></span>
                        <h1 class="mb-3 mt-3"><?php echo $bannerTitle; ?></h1>

                        <p class="mb-4 pr-5"><?php echo $bannrSubtitle; ?></p>
                        <div class="btn-container ">
                            <a href="<?php echo $bannrBtnURL; ?>" target="_blank" class="btn btn-main-2 btn-icon btn-round-full"><?php echo $bannrBtn; ?> <i class="icofont-simple-right ml-2  "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <?php
		$abousAsData = get_field("our_ngo");
		foreach ($abousAsData as  $value) {
	
		?>
        <section class="section clients" style="padding:30px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h2><?php echo  $value["title"]; ?></h2>
                        <div class="divider mx-auto my-4"></div>
                        <p><?php echo  $value["subtitle"]; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
		<?php
		}
		?>
    <section class="section about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-sm-12">
                    <div class="about-img">
                        <img src="<?php echo $service_image ?>" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4  col-sm-12">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <h2 class="title-color"><?php echo $serviseTitle ?></h2>
                        <p class="mt-4 mb-5"><?php echo $servisesubTitle ?></p>

                        <a href="<?php echo $serviseurl ?>" class="btn btn-main-2 btn-round-full btn-icon">Services<i class="icofont-simple-right ml-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section ">
        <div class="container">
            <div class="cta position-relative">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-doctor"></i>
                            <span class="h3 counter" data-count="58">0</span>k
                            <p>Happy People</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-flag"></i>
                            <span class="h3 counter" data-count="700">0</span>+
                            <p>Surgery Comepleted</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-badge"></i>
                            <span class="h3 counter" data-count="40">0</span>+
                            <p>Expert Doctors</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-globe"></i>
                            <span class="h3 counter" data-count="20">0</span>
                            <p>Worldwide Branch</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section team">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4">Our Courses</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Enhancing Your Clinical Skills and Building a Successful Practice with our courses</p>
				</div>
			</div>
		</div>

		<div class="row">
			<?php
      $course =new WP_Query(
		array(
			"posts_per_page" => 4 ,
			'post_type' => 'course',
			'orderby' => 'rand',
		)
		);
		while ( $course->have_posts()) {
			$course->the_post();
			$courseFeatureImage = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "thumbnail");
			?>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="<?php echo $courseFeatureImage[0] ?>" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="doctor-single.html"><?php the_title() ?></a></h4>
						<p><?php echo wp_trim_words(get_the_excerpt() ,10)?></p>
						<a href="<?php the_permalink() ?>" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a>
					</div>
				</div>
			</div>
			<?php
			# code...
		} wp_reset_postdata();
			?>
		</div>
	</div>
    <h6 class="text-center mt-2"><a href="/courses/">View All</a></h6>
</section>
    <section class="section team">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4">Our Therapies</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Pathways to Wellness By Guiding you through therapy to find inner peace, balance, and growth.</p>
				</div>
			</div>
		</div>
			<?php
      $therapy =new WP_Query(
		array(
			"posts_per_page" => 4 ,
			'post_type' => 'therapy',
			'orderby' => 'rand',
		)
		);
		while ( $therapy->have_posts()) {
			$therapy->the_post();
			$therapyFeatureImage = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "thumbnail");
			?>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="<?php echo $therapyFeatureImage[0] ?>" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="doctor-single.html"><?php the_title() ?></a></h4>
						<p><?php echo wp_trim_words(get_the_excerpt() ,10)?></p>
						<a href="<?php the_permalink() ?>" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a>
					</div>
				</div>
			</div>
			<?php
			# code...
		} wp_reset_postdata();
			?>
		</div>
	</div>
    <h6 class="text-center mt-2"><a href="/therapies/">View All</a></h6>
</section>
<section class="section team">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4">Our Blogs</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Pathways to Wellness By Guiding you through therapy to find inner peace, balance, and growth.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<?php
      $posts =new WP_Query(
		array(
			"posts_per_page" => 4 ,
			'post_type' => 'post',
			'orderby' => 'rand',
		)
		);
		while ( $posts->have_posts()) {
			$posts->the_post();
			$postsFeatureImage = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "thumbnail");
			?>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="<?php echo $postsFeatureImage[0] ?>" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="doctor-single.html"><?php the_title() ?></a></h4>
						<p><?php echo wp_trim_words(get_the_excerpt() ,10)?></p>
						<a href="<?php the_permalink() ?>" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a>
					</div>
				</div>
			</div>
			<?php
			# code...
		} wp_reset_postdata();
			?>
           
		</div>
        
	</div>
    <h6 class="text-center mt-2"><a href="/blogs/">View All</a></h6>
</section>
<?php get_footer(); ?>