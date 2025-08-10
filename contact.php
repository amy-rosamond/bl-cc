<?php

include('includes/variables.php');
include('header.php');

?>

<div class="page-heading" style="background-color: var(--dark-grey);padding-bottom:70px;">
    <h1>Get in touch</h1>
    <p>Want to get in touch? We'd love to hear from you. Here's how you can reach us.</p>
</div>

<?php

// $contactBox = array();

// $contactBox[1] = array(
//     "icon" => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
//   <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
// </svg>',
//     "title" => 'Find us on Social Media',
//     "info" => 'Check out ' . Blcc::NAME->value . ' on all our platforms.'
// );

// $contactBox[2] = array(
//     "icon" => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
//     <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
//     </svg>',
//     "title" => 'Get in Touch',
//     "info" => 'Contact us here at ' . Blcc::NAME->value . ' & let us see how we can assist you.'
// );

$socialMedia = array();

$socialMedia[1] = array(
    "icon" =>  Blcc::FBICON->value,
    "link" =>  Blcc::FBLINK->value
);

$socialMedia[2] = array(
    "icon" =>  Blcc::INSTAICON->value,
    "link" =>  Blcc::INSTALINK->value
);

$socialMedia[3] = array(
    "icon" =>  Blcc::INICON->value,
    "link" =>  Blcc::INLINK->value
);

?>

<div class="contact-box-container">
    <?php

    // foreach ($contactBox as $box) {
    //     echo '<div class="contact-box">
    //                 <div>' . $box['icon'] . '</div>
    //                 <h2>' . $box['title'] . '</h2>
    //                 <p>' . $box['info'] . '</p>
    //                 <p>' . $box['action'] . '</p>
    //             </div>';
    // }

    ?>
    <div class="contact-box">
        <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
            </svg></div>
        <h2>Find us on Social Media</h2>
        <?php echo '<p>Check out ' . Blcc::NAME->value . ' on all our platforms.</p>' ?>
        <div class="contact-box-social">
            <?php
            foreach ($socialMedia as $social) {
                    echo '<a hef="' . $social['link'] . '">' . $social['icon'] . '</a>';
                }
            ?>
        </div>
    </div>
    <div class="contact-box">
        <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
            </svg></div>
        <h2>Get in Touch</h2>
        <?php echo '<p>Contact us here at ' . Blcc::NAME->value . ' & let us see how we can assist you.</p>' ?>
        <div>
            <button>Contact Us</button>
        </div>
    </div>
    <div class="contact-box contact-box-bottom">
        <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
            </svg></div>
        <h2>Need inspiration?</h2>
        <?php echo '<p>Take a look at ' . Blcc::NAME->value . '\'s previous projects.</p>' ?>
        <div>
            <!-- <a href="projects.php"> -->
                <button onclick="location.href='projects.php';">Previous Projects</button>
            <!-- </a> -->
        </div>
    </div>
</div>

<?php
include('footer.php');
?>