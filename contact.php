<?php

include('variables.php');
include('header.php');

// echo 'CONTACT';

$contactBox = array();

$contactBox[1] = array(
    "icon" => "<i class='bx bx-mobile-alt'></i>",
    "title" => "Call Us Here",
    "contact" => Baseit::TEL->value,
    "button" => '<button href="tel:' . Baseit::TEL->value . '">Call</button>'
);

$contactBox[2] = array(
    "icon" => "<i class='bx bxl-instagram'></i>",
    "title" => "Instagram Us Here!",
    "contact" => '@baseitelectrical',
    "button" => '<button href="">Instagram</button>'
);

$contactBox[3] = array(
    "icon" => "<i class='bx bxl-facebook'></i>",
    "title" => "Facebook Us Here!",
    "contact" => '@baseitelectrical',
    "button" => '<button href="">Facebook</button>'
);

$contactBox[4] = array(
    "icon" => "<i class='bx bx-map-pin'></i>",
    "title" => "Locate Us Here!",
    "contact" => 'North London',
    "button" => '<button href="">Map</button>'
);

?>

<div class="contact-box-container">
    <?php

    foreach ($contactBox as $box) {
        echo '<div class="contact-box">
                    <p>' . $box['icon'] . '</p>
                    <p>' . $box['title'] . '</p>
                    <p>' . $box['contact'] . '</p>
                    <p>' . $box['button'] . '</p>
                </div>';
        // echo $box['title'] . ' ' . $box['icon'] . ' ' . $box['contact'];
    }

    ?>
</div>

<?php
include('footer.php');
?>