<?php
// Default page.php is used fro about as page
get_header();
?>
<section class="page-title bg-1">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
					<span class="text-white">About Us</span>
					<h1 class="text-capitalize mb-5 text-lg">About Us</h1>

					<!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">About Us</a></li>
          </ul> -->
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
  $aboutImage=get_field("about_us_image");
  $aboutTitle=get_field("about_us_title");
  $aboutcontent=get_field("about_us_content");

  
?>
<div class="container my-5">
  <div class="row">
    <div class="col-lg-6">
      <img class="w-100 shadow" src="<?php  echo $aboutImage["sizes"]["medium_large"]; ?>" />
    </div>
    <div class="col-lg-6">
      <div class="p-5 mt-4">
          <h1 class="display-4"><?php echo $aboutTitle ?></h1>
          <p class="lead"><?php echo $aboutcontent; ?></p>
        </div>
    </div>
</div>
</div>
<section class="section about-page">
	<div class="container">
		<?php
		$abousAsData = get_field("about_us");
		foreach ($abousAsData as  $value) {
			# code...

		?>
			<div class="row">
				<div class="col-lg-4">
					<h2 class="title-color"><?php echo  $value["title"]; ?></h2>
				</div>
				<div class="col-lg-8">
					<p><?php echo  $value["subtitle"]; ?></p>
				</div>
			</div>
			<br />
			<br />
		<?php
		}
		?>

	</div>
</section>
<section class="section awards">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4">
				<h2 class="title-color"><?php echo get_field("for_society_title") ?></h2>
				<div class="divider mt-4 mb-5 mb-lg-0"></div>
			</div>
			<div class="col-lg-8">
				<div class="row">
					<?php
					$societyImages = get_field("society_images");

					foreach ($societyImages as $image) {

					?>

						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="award-img">
								<img src="<?php echo  $image["images"]["url"] ?>" alt="" class="img-fluid">
							</div>
						</div>
					<?php
					}
					?>
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

		<div class="row">
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
</section>
<section class="section testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-6">
				<div class="section-title">
					<h2 class="mb-4">What they say about us</h2>
					<div class="divider  my-4"></div>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6 testimonial-wrap offset-lg-6">
				<div class="testimonial-block">
					<div class="client-info ">
						<h4>Amazing service!</h4>
						<span>John Partho</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>

				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Expert doctors!</h4>
						<span>Mullar Sarth</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Good Support!</h4>
						<span>Kolis Mullar</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Nice Environment!</h4>
						<span>Partho Sarothi</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Modern Service!</h4>
						<span>Kolis Mullar</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
// Default page.php is used fro about as page
get_footer();
?>