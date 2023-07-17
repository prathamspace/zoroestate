<?php
// Template Name: Home

?>

<?php get_header(); ?>

<!-- banner -->

<section class="banner">
    <video autoplay muted loop id="bannerVideo">
        <source src="<?php echo get_template_directory_uri() . "/assets/img/banner.mp4" ?>" type="video/mp4">
    </video>
    <div class="bannerContent">
        <h1>Real Estate with</h1>
        <p class="child1">Real</p>
        <p class="child2">Experience</p>
    </div>
</section>


<!-- banner ending -->


<!-- Listings -->

<sections class="listings">
    <h2>Listings</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi sapiente tempore sint, qui laborum nostrum debitis doloremque minima deserunt error perspiciatis reiciendis dolor eligendi. Eligendi dolorum quibusdam magni ad quidem?</p>
</sections>



<?php get_footer(); ?>