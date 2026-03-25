<?php

include('includes/variables.php');
include('includes/projects-array.php');
include('header.php');

echo '<div class="container container-dark" style="margin-top:0px;">
    <h1 id="projects">Projects</h1>
    <p data-aos="flip-right" data-aos-duration="500">Check out all our hard work here at ' . Company::NAME->value . '.</p>
</div>';

?>

<div class="nav container container container-overlap">
    <nav class="container-light scale-in-hor-center">
        <?php

        foreach ($navBarProjects as $a) {
            echo '<a onClick="{( => { lenis?.scrollTo("' . $a['href'] . '");} }" href="' . $a['href'] . '">' . $a['name'] . '</a>';
        }

        ?>
    </nav>
</div>

<?php


// refurbishment
// array
foreach ($refurbInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="container container-dark" style="padding-top: 60px;">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

echo '';

?>

<div class="container container-overlap container-overlap-large">
    <div class="container-projects-info">
        <div class="projects-info" data-aos="slide-up" data-aos-duration="500">
            <h3>Location</h3>
            <p>Chorleywood</p>
        </div>
        <div class="projects-info" data-aos="slide-up" data-aos-duration="500">
            <h3>Project type</h3>
            <p>Full refurbishment of existing bungalow with large rear extension</p>
        </div>
        <div class="projects-info" data-aos="slide-up" data-aos-duration="500">
            <h3>Duration</h3>
            <p>34 Weeks</p>
        </div>
    </div>
</div>


<div class="container container-dark container-overlap container-projects-img">
    <div class="project-images" data-aos="slide-up" data-aos-duration="500">
        <a class="prev" onclick="plusSlides(-1)">
            <!-- &#10094; -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </a>

        <div class="refurbChorleywoodImages fade">
            <!-- <div class="numbertext">1 / 3</div> -->
            <img src="img/projects/refurb-chorleywood/house.jpg">
            <!-- <div class="text">Caption Text</div> -->
        </div>

        <div class="refurbChorleywoodImages fade">
            <!-- <div class="numbertext">2 / 3</div> -->
            <img src="img/projects/refurb-chorleywood/kitchen-blue.jpeg">
            <!-- <div class="text">Caption Two</div> -->
        </div>

        <div class="refurbChorleywoodImages fade">
            <!-- <div class="numbertext">2 / 3</div> -->
            <img src="img/projects/refurb-chorleywood/hallway.jpeg">
            <!-- <div class="text">Caption Two</div> -->
        </div>

        <div class="refurbChorleywoodImages fade">
            <!-- <div class="numbertext">2 / 3</div> -->
            <img src="img/projects/refurb-chorleywood/ceiling-window.jpeg">
            <!-- <div class="text">Caption Two</div> -->
        </div>

        <div class="refurbChorleywoodImages fade">
            <!-- <div class="numbertext">2 / 3</div> -->
            <img src="img/projects/refurb-chorleywood/roof-window.jpeg">
            <!-- <div class="text">Caption Two</div> -->
        </div>

        <div class="refurbChorleywoodImages fade">
            <!-- <div class="numbertext">2 / 3</div> -->
            <img src="img/projects/refurb-chorleywood/shower.jpeg">
            <!-- <div class="text">Caption Two</div> -->
        </div>

        <div class="refurbChorleywoodImages fade">
            <!-- <div class="numbertext">2 / 3</div> -->
            <img src="img/projects/refurb-chorleywood/before-walls.jpeg">
            <!-- <div class="text">Caption Two</div> -->
        </div>

        <a class="next" onclick="plusSlides(1)">
            <!-- &#10095; -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </a>
    </div>

    <div style="text-align:center;margin: 20px 0px 0px;">
        <span class="dot1" onclick="currentSlide(1)"></span>
        <span class="dot1" onclick="currentSlide(2)"></span>
        <span class="dot1" onclick="currentSlide(3)"></span>
        <span class="dot1" onclick="currentSlide(4)"></span>
        <span class="dot1" onclick="currentSlide(5)"></span>
        <span class="dot1" onclick="currentSlide(6)"></span>
        <span class="dot1" onclick="currentSlide(7)"></span>
    </div>
</div>

<div class="container container-overlap">
    <div class="container-light" data-aos="slide-up" data-aos-duration="500">
        <h3>Client Testimonial</h3>
        <p>"Couldn't be happier! James and the team went the extra mile to 'make it happen' and had lots of good advice about tweaks and improvements to our original plans. We were happy with all trades brought in and rather than looking forward to when it would all be finished, we were sad not to be seeing them every day! So sad we found some more jobs for them to do." </p>
        <p><b>Katie</b><br>AL5</p>
    </div>
</div>


<?php


// conversions
// array
foreach ($conversionsInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="container container-dark" style="padding-top: 60px;">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

echo '';

?>

<div class="container container-overlap container-overlap-large">
    <div class="container-projects-info">
        <div class="projects-info" data-aos="slide-up" data-aos-duration="500">
            <h3>Location</h3>
            <p>Chingford</p>
        </div>
        <div class="projects-info" data-aos="slide-up" data-aos-duration="500">
            <h3>Project type</h3>
            <p>Converting a single bungalow into three townhouses</p>
        </div>
        <div class="projects-info" data-aos="slide-up" data-aos-duration="500">
            <h3>Duration</h3>
            <p>76 Weeks</p>
        </div>
    </div>
</div>

<div class="container container-dark container-overlap container-projects-img">
    <div class="project-images" data-aos="slide-up" data-aos-duration="500">
        <a class="prev" onclick="plusSlides2(-1)">
            <!-- &#10094; -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </a>

        <div class="conversionChingfordImages fade">
            <!-- <div class="numbertext">1 / 3</div> -->
            <img src="img/projects/conversion-chingford/house.jpg">
            <!-- <div class="text">Caption Text</div> -->
        </div>

        <div class="conversionChingfordImages fade">
            <!-- <div class="numbertext">2 / 3</div> -->
            <img src="img/projects/conversion-chingford/bathroom-sink.jpg">
            <!-- <div class="text">Caption Two</div> -->
        </div>

        <div class="conversionChingfordImages fade">
            <!-- <div class="numbertext">2 / 3</div> -->
            <img src="img/projects/conversion-chingford/garden.jpg">
            <!-- <div class="text">Caption Two</div> -->
        </div>

        <div class="conversionChingfordImages fade">
            <!-- <div class="numbertext">2 / 3</div> -->
            <img src="img/projects/conversion-chingford/kitchen-white.jpg">
            <!-- <div class="text">Caption Two</div> -->
        </div>

        <div class="conversionChingfordImages fade">
            <!-- <div class="numbertext">2 / 3</div> -->
            <img src="img/projects/conversion-chingford/scaffolding.jpg">
            <!-- <div class="text">Caption Two</div> -->
        </div>

        <div class="conversionChingfordImages fade">
            <!-- <div class="numbertext">2 / 3</div> -->
            <img src="img/projects/conversion-chingford/stairs.jpg">
            <!-- <div class="text">Caption Two</div> -->
        </div>

        <a class="next" onclick="plusSlides2(1)">
            <!-- &#10095; -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </a>
    </div>

    <div style="text-align:center;margin: 20px 0px 0px;">
        <span class="dot2" onclick="currentSlide2(1)"></span>
        <span class="dot2" onclick="currentSlide2(2)"></span>
        <span class="dot2" onclick="currentSlide2(3)"></span>
        <span class="dot2" onclick="currentSlide2(4)"></span>
        <span class="dot2" onclick="currentSlide2(5)"></span>
        <span class="dot2" onclick="currentSlide2(6)"></span>
    </div>
</div>

<div class="container container-overlap">
    <div class="container-light" data-aos="slide-up" data-aos-duration="500">
        <h3>Client Testimonial</h3>
        <p>"Couldn't be happier! James and the team went the extra mile to 'make it happen' and had lots of good advice about tweaks and improvements to our original plans. We were happy with all trades brought in and rather than looking forward to when it would all be finished, we were sad not to be seeing them every day! So sad we found some more jobs for them to do." </p>
        <p><b>Katie</b><br>AL5</p>
    </div>
</div>

<?php



include('footer.php');

?>
<script src="script/script.js?r=123"></script>
<script src="script/slideShow.js?r=123"></script>

<script>
    window.addEventListener('load', function() {
        pageOnload('projects');
    });
</script>

</body>

</html>