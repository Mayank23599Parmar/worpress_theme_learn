<?php get_header();
// variable 
$featureImage = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "large");
$therapyFeatures=explode(",",get_field("therapy_feature"));
$therapyPageBanner="../images/bg/22.jpg";
if(get_field("therapy_page_banner")){
	$therapyPageBanner=get_field("therapy_page_banner")["url"];
}
?>
<section class="page-title bg-1" style="background:url(<?php echo $therapyPageBanner ?>) no-repeat 50% 50%">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
					<span class="text-white">Therapy Details</span>
					<h1 class="text-capitalize mb-5 text-lg"><?php the_title() ?></h1>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section department-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="department-img">
					<img src="<?php echo $featureImage[0]; ?>" alt="" class="img-fluid">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8">
				<div class="department-content mt-5">
					<h3 class="text-md"><?php echo get_field("therapy_title"); ?></h3>
					<div class="divider my-4"></div>
					<p class="lead">
						<?php echo get_field("therapy_subtitle"); ?>
					</p>
					<p><?php echo get_field("therapy_content"); ?>
					</p>
					<h3 class="mt-5 mb-4">Services features</h3>
					<div class="divider my-4"></div>
					<ul class="list-unstyled department-service">
						<?php
						foreach ($therapyFeatures as $feature){
							?>
						<li><i class="icofont-check mr-2"></i><?php echo trim($feature) ?></li>
							<?php
						}
						?>
					</ul>

					<a href="appoinment.html" class="btn btn-main-2 btn-round-full">Make an Appoinment<i class="icofont-simple-right ml-2  "></i></a>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="sidebar-widget schedule-widget mt-5">
					<h5 class="mb-4">Time Schedule</h5>

					<ul class="list-unstyled">
						<li class="d-flex justify-content-between align-items-center">
							<span>Monday - Friday</span>
							<span>9:00 - 17:00</span>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Saturday</span>
							<span>9:00 - 16:00</span>
						</li>
						<li class="d-flex justify-content-between align-items-center">
							<span>Sunday</span>
							<span>Closed</span>
						</li>
					</ul>

					<div class="sidebar-contatct-info mt-4">
						<p class="mb-0">Need Urgent Help?</p>
						<h3><a href="tel:<?php genralSettings("mobileNumber")?>"><?php genralSettings("mobileNumber")?></a></h3>
					</div>
				</div>
			</div>
		</div>
		<div class="custom-page-data mt-5">
		<?php
		while (have_posts()) {
			the_post();
			the_content()
		?>
		<?php
			# code...
		}

		?>
		</div>
	
	</div>
</section>

<!-- footer Start -->
<?php get_footer() ?>