<?php

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

include('includes/variables.php');
include('includes/process-array.php');
include('includes/services-array.php');
include('includes/services-class.php');
include('header.php');

echo '<div id="backToTop" class="container container-dark" style="margin-top:0px;">
    <h1>Services</h1>
    <p data-aos="flip-right" data-aos-duration="500">All we can offer here at ' . Company::NAME->value . '.</p>
</div>';
?>

<div class="nav container container container-overlap">
    <nav class="container-light scale-in-hor-center">
        <?php

        foreach ($navBarServices as $a) {
            echo '<a onClick="{( => { lenis?.scrollTo("' . $a['href'] . '");} }" href="' . $a['href'] . '">' . $a['name'] . '</a>';
        }

        ?>
    </nav>
</div>

<?php


// KITCHENS
// array
foreach ($kitchensInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="container container-dark" style="padding-top: 60px;">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

?>

<div class="container-overlap container-overlap-large">

    <?php

    echo '<div class="service-card-wrapper">';

    // CLASS
    foreach ($kitchens as $p) {
        $service = new Service($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


        echo $service->displayOutput();
    }

    echo '</div><div class="service-back-to-top"><a href="#backToTop" class="a-button">Back to top</a></div>';

    ?>

</div>



<?php
// DOORS
// array
foreach ($doorsInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="container container-dark" style="padding-top: 60px;">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

?>

<div class="container-overlap container-overlap-large">

    <?php

    echo '<div class="service-card-wrapper">';

    // CLASS
    foreach ($doors as $p) {
        $service = new Service($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


        echo $service->displayOutput();
    }

    echo '</div><div class="service-back-to-top"><a href="#backToTop" class="a-button">Back to top</a></div>';

    ?>

</div>



<?php
// ROOFS
// array
foreach ($roofsInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="container container-dark" style="padding-top: 60px;">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

?>

<div class="container-overlap container-overlap-large">

    <?php

    echo '<div class="service-card-wrapper">';

    // CLASS
    foreach ($roofs as $p) {
        $service = new Service($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


        echo $service->displayOutput();
    }

    echo '</div><div class="service-back-to-top"><a href="#backToTop" class="a-button">Back to top</a></div>';

    ?>

</div>



<?php
// JOINERY
// array
foreach ($joineryInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="container container-dark" style="padding-top: 60px;">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

?>

<div class="container-overlap container-overlap-large">

    <?php

    echo '<div class="service-card-wrapper">';

    // CLASS
    foreach ($joinery as $p) {
        $service = new Service($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


        echo $service->displayOutput();
    }

    echo '</div><div class="service-back-to-top"><a href="#backToTop" class="a-button">Back to top</a></div>';

    ?>

</div>



<?php
// framework
// array
foreach ($frameworkInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="container container-dark" style="padding-top: 60px;">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

?>

<div class="container-overlap container-overlap-large">

    <?php

    echo '<div class="service-card-wrapper">';

    // CLASS
    foreach ($framework as $p) {
        $service = new Service($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


        echo $service->displayOutput();
    }

    echo '</div><div class="service-back-to-top"><a href="#backToTop" class="a-button">Back to top</a></div>';

    ?>

</div>



<?php
// secondFix
// array
foreach ($secondFixInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="container container-dark" style="padding-top: 60px;">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

?>

<div class="container-overlap container-overlap-large">

    <?php

    echo '<div class="service-card-wrapper">';

    // CLASS
    foreach ($secondFix as $p) {
        $service = new Service($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


        echo $service->displayOutput();
    }

    echo '</div><div class="service-back-to-top"><a href="#backToTop" class="a-button">Back to top</a></div>';

    ?>

</div>



<?php
// flooring
// array
foreach ($flooringInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="container container-dark" style="padding-top: 60px;">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

?>

<div class="container-overlap container-overlap-large">

    <?php

    echo '<div class="service-card-wrapper">';

    // CLASS
    foreach ($flooring as $p) {
        $service = new Service($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


        echo $service->displayOutput();
    }

    echo '</div><div class="service-back-to-top"><a href="#backToTop" class="a-button">Back to top</a></div>';

    ?>

</div>



<?php
// construction
// array
foreach ($constructionInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="container container-dark" style="padding-top: 60px;">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

?>
s
<div class="container-overlap container-overlap-large">

    <?php

    echo '<div class="service-card-wrapper">';

    // CLASS
    foreach ($construction as $p) {
        $service = new Service($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


        echo $service->displayOutput();
    }

    echo '</div><div class="service-back-to-top"><a href="#backToTop" class="a-button">Back to top</a></div>';

    ?>

</div>


<!-- <div class="container-overlap container-overlap-large">
    <div class="service-card-wrapper">
        <div class="service-card">
            <div class="service-card-img">
                <img src="img/services/sink.jpg" alt="sink">
                <div class="service-card-img-info">
                    <h3>Added into a St Albans home.</h3>
                    <p>Simple but effective.</p>
                </div>
            </div>
            <div>
                <h2>Kitchen Sink</h2>
                <p>Look at all this information I can put in this little space down here! Great to include any extra information you might need.</p>
            </div>
        </div>
    </div>
</div> -->

<div class="process-container scale-in-hor-center">
    <div class="process-wrapper">
        <?php

        // count for process count (starting at one so no need for +1)
        $i = 1;
        foreach ($process as $count => $b) {
            echo '<div class="process-row">
                    <div class="process" data-aos="slide-up" data-aos-duration="500">
                        <div class="process-svg">' . $b['icon'] . '</div>
                        <div>
                            <h2>' . $b['title'] . '</h2>
                            <p>' . $b['info'] . '</p>
                        </div>
                    </div>
                    <div class="process-count">
                        <div data-aos="slide-up" data-aos-duration="500"><h3>';
            echo $i;
            // if i is divisible by 2 and equals 0 (even)
            // if ($i % 2 == 0) {
            //     echo $i;
            // }
            echo '</h3></div>
                    </div>
                    <div class="process">
                        <div>&nbsp;</div>
                        <div>
                            <h2>&nbsp;</h2>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </div>';
            $i++;
        }
        ?>
    </div>
</div>

<!-- <div class="process-container">
    <div class="process-wrapper">
        <div class="process">
            <div>
                <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                </svg>
            </div>
            <div>
                <h2>Get in Touch</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
</div> -->

<?php

include('footer.php');

?>

<script src="script/script.js?r=123"></script>

<script>
    window.addEventListener('load', function() {
        pageOnload('services');
    });

    // window.onload = function() {
    //     pageOnload('services');
    // }
</script>

</body>

</html>