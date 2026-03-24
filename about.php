<?php

include('includes/variables.php');
include('header.php');
include('includes/about-class.php');
include('includes/about-array.php');


echo '<div class="container container-dark" style="margin-top:0px;">
    <h1>About Us</h1>
    <p data-aos="flip-right" data-aos-duration="500">Everything ' . Company::NAME->value . '.</p>
    <p data-aos="flip-right" data-aos-duration="500">As a family-run company, we understand the significance of trust and the importance of creating spaces that families can truly call home. </p>
</div>';

?>

<div class="nav container container-overlap">
    <nav class="container-light scale-in-hor-center">
        <?php

        foreach ($navBarAbout as $a) {
            echo '<a onClick="{( => { lenis?.scrollTo("' . $a['href'] . '");} }" href="' . $a['href'] . '">' . $a['name'] . '</a>';
        }

        ?>
    </nav>
</div>

<?php

echo '<div class="container container-dark container-img">
    <img src="img/website/front-door.jpg">
</div>';

echo '<div id="approach" class="container container-overlap">
    <div class="container-light">
        <h2>Our Approach</h2>
        <p>From concept to fruition, we work closely with our clients, ensuring their vision becomes a reality whilst adhering to the highest standards of craftsmanship and professionalism.</p>
        <p>Our team of skilled and dedicated professionals includes architects, designers, engineers, and craftsmen, all working together to deliver outstanding results. We take pride in our ability to merge timeless design with modern functionality, creating aesthetically pleasing and practical spaces for everyday living.</p>
        <p>Over the years, we have built a strong network of trusted suppliers and subcontractors, enabling us to source the finest materials and deliver superior construction services. We stay up-to-date with the latest industry trends, technologies, and sustainable practices, ensuring that our projects are as beautiful as they are eco-friendly and energy-efficient.</p>
    </div>
</div>';

echo '<div class="container container-dark container-img">
    <img src="img/website/window-plant.jpg">
</div>';

echo '<div id="services" class="container container-overlap">
    <div class="container-light">
        <h2>Services</h2>
        <p>We specialise in residential projects, transforming houses into dream homes. Whether it’s a small-scale renovation, an extensive remodelling, or a ground-up construction project, we bring over four decades of industry experience, expertise, and attention to detail to every endeavour. From concept to fruition, we work closely with our clients, ensuring their vision becomes a reality whilst adhering to the highest standards of craftsmanship and professionalism.</p>
    </div>
</div>';

echo '<div class="container container-dark container-img">
    <img src="img/website/sink.jpg">
</div>';

echo '<div id="planning" class="container container-overlap">
    <div class="container-light">
        <h2>Customer Care</h2>
        <p>We are passionate about what we do, which reflects in the quality of our work and the satisfaction of our clients. At Open Space Construction, we believe in clear communication, transparency, and collaboration, involving our clients at every stage of the construction process. We listen to their needs, understand their aspirations, and provide personalised solutions that exceed their expectations. Our dedication to exceptional customer service has earned us a reputation as a trusted and reliable regional construction company.</p>
    </div>
</div>';

include('footer.php');

?>

<!-- <nav class="scale-up-center">
    <?php
    //$home = new AboutItem('<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
    //<path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
    //</svg>', 'index.php', 'Home', 'index');
    // $home->get_details();

    //$about = new AboutItem('<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
    //<path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
    //</svg>', 'about.php', 'About', 'about');
    // $about->get_details();

    //$services = new AboutItem('<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
    //<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
    //</svg>', 'services.php', 'Services', 'services');
    // $services->get_details();

    ?>
</nav> -->



<script src="script/script.js?r=123"></script>

<script>
    window.addEventListener('load', function() {
        pageOnload('about');
    });
</script>

</body>

</html>