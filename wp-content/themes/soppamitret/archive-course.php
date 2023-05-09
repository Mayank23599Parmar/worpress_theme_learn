<?php get_header() ?>
<section class="page-title bg-1">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
					<span class="text-white">Soppamitret Courses</span>
					<h1 class="text-capitalize mb-5 text-lg">Mastering the Art of Therapy: Advanced Techniques and Skills.</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section service-2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2>Soppamitret Courses</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Enhancing Your Clinical Skills and Building a Successful Practice with our courses</p>
				</div>
			</div>
		</div>

		<div class="row">
			<?php

			while (have_posts()) {
				the_post();
				$featureImage = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "thumbnail");
			?>
				<div class="col-lg-4 col-md-6 ">
					<div class="service-block mb-5">
						<img src="<?php echo $featureImage[0] ?>" alt="" class="img-fluid w-100">
						<div class="content">
							<h4 class="mt-4 mb-2 title-color"><?php the_title() ?></h4>
							<p class="mb-4"><?php echo wp_trim_words(get_the_excerpt() ,15)?></p>
							<a href="<?php the_permalink() ?>" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a>
						</div>
					</div>
				</div>
			<?php
				# code...
			}


			?>

		</div>
	</div>
</section>

<!-- footer Start -->
<?php get_footer() ?>