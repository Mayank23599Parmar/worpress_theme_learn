<?php get_header();
$featureImage = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "large");
$categories = get_categories();
$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>

<section class="page-title bg-1" style="background:url(<?php echo $featureImage[0] ?>) no-repeat 50% 50%">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Our Blog</span>
                    <h1 class="text-capitalize mb-5 text-lg"><?php the_title() ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        <div class="single-blog-item">
                            <img src="images/blog/blog-1.jpg" alt="" class="img-fluid">

                            <div class="blog-item-content mt-5">
                                <div class="blog-item-meta mb-3">
                                    <span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i> <?php echo get_the_category_list(",") ?></span>
                                    <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> <?php the_time('F j, Y') ?></span>
                                </div>

                                <h2 class="mb-4 text-md"><a href="<?php the_permalink() ?>">
                                        <?php the_title() ?>
                                    </a></h2>

                                <div class="lead mb-4">
                                    <?php the_content() ?>
                                </div>
                                <div class="mt-5 clearfix">
                                    <ul class="float-right list-inline">
                                        <li class="list-inline-item"> Share: </li>
                                        <li class="list-inline-item"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link ?>"><i class="icofont-facebook"></i></a></li>
                                        <li class="list-inline-item"><a target="_blank" href="https://twitter.com/intent/tweet?description=<?php the_title() ?>&url=<?php echo $actual_link ?>"><i class="icofont-twitter"></i></a></li>
                                        <li class="list-inline-item"><a target="_blank" href="https://www.instagram.com/sharer/sharer.php?u=<?php echo $actual_link ?>"><i class="icofont-instagram"></i></a></li>
                                        <li class="list-inline-item"><a target="_blank" href="https://api.whatsapp.com/send?text=<?php echo $actual_link ?>"><i class="icofont-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
                    <div class="sidebar-widget latest-post mb-3">
                        <h5>Popular Posts</h5>
                        <?php
                        $reletedPost = new WP_Query(
                            array(
                                "posts_per_page" => -1,
                                'post_type' => 'post',
                                'post__not_in' => array(get_the_ID()),
                                'orderby' => 'rand',
                            )
                        );
                        while ($reletedPost->have_posts()) {
                            $reletedPost->the_post();
                        ?>
                            <div class="py-2">
                                <span class="text-sm text-muted"><?php the_time('F j, Y') ?></span>
                                <h6 class="my-2"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h6>
                            </div>
                        <?php
                            # code...
                        }
                        wp_reset_postdata();
                        ?>
                    </div>

                    <div class="sidebar-widget category mb-3">
                        <h5 class="mb-4">Categories</h5>

                        <ul class="list-unstyled">
                            <?php
                            foreach ($categories as $category) {
                                if ($category->category_count > 0) {
                            ?>
                                    <li class="align-items-center">
                                        <a href="<?php echo get_category_link($category->term_id) ?>"><?php echo $category->cat_name ?></a>
                                        <span><?php echo $category->category_count ?></span>
                                    </li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>



                    <div class="sidebar-widget schedule-widget mb-3">
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
        </div>
    </div>
</section>
<?php get_footer() ?>