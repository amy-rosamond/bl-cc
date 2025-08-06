<?php

$navBar = array();

$navBar[1] = array(
    "icon" => '<i class="bx bx-home"></i>',
    "href" => 'index.php',
    "name" => 'Home'
);

$navBar[2] = array(
    "icon" => '<i class="bx bx-bulb"></i>',
    "href" => 'services.php',
    "name" => 'Services'
);

$navBar[3] = array(
    "icon" => '<i class="bx bx-star"></i>',
    "href" => 'reviews.php',
    "name" => 'Reviews'
);

$navBar[4] = array(
    "icon" => '<i class="bx bx-book"></i>',
    "href" => 'projects.php',
    "name" => 'Projects'
);

$navBar[5] = array(
    "icon" => '<i class="bx bx-phone-call"></i>',
    "href" => "contact.php",
    "name" => "Contact"
);



$navBarFooter = array();

$navBarFooter[1] = array(
    "icon" => '<i class="bx bxl-instagram"></i>',
    "href" => '#',
    "name" => 'Instagram Us'
);

$navBarFooter[2] = array(
    "icon" => '<i class="bx bxl-facebook"></i>',
    "href" => '#',
    "name" => 'Facebook Us'
);

$navBarFooter[3] = array(
    "icon" => '<i class="bx bx-phone-call" ></i>',
    "href" => 'tel:' . Baseit::TEL->value . '',
    "name" => 'Phone Us'
);

$navBarFooter[4] = array(
    "icon" => '<i class="bx bx-envelope" ></i>',
    "href" => 'tel:' . Baseit::EMAIL->value . '',
    "name" => 'Email Us'
);

$navBarFooter[5] = array(
    "icon" => '<i class="bx bx-map-pin" ></i>',
    "href" => '#',
    "name" => 'Locate Us'
);

$navBarFooterHours = array();

$navBarFooterHours[0] = array(
    "monday" => 'Monday: 09:00 - 17:00',
    "tuesday" => 'Tuesday: 09:00 - 17:00',
    "wednesday" => 'Wednesday: 09:00 - 17:00',
    "thursday" => 'Thursday: 09:00 - 17:00',
    "friday" => 'Friday: 09:00 - 17:00',
    "saturday" => 'Saturday: 10:00 - 16:00',
    "sunday" => 'Sunday: Closed'
);