<?php

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

include('includes/process-array.php');
include('includes/variables.php');
include('header.php');

echo '<div class="page-heading">
    <h1>Services</h1>
    <p data-aos="flip-right" data-aos-duration="500">All we can offer here at ' . Blcc::NAME->value . '.</p>
</div>';
?>

<!-- <div class="service-container scale-in-hor-center">
    <div class="service-wrapper">

    </div>
</div> -->

<div class="process-container scale-in-hor-center">
    <div class="process-wrapper">
        <?php

        // count for process count
        $i = 0;
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
            // process number per iteration ( +1 because first iteration is 0 )
            echo $i + 1;
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