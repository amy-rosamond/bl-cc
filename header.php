<!DOCTYPE html>
<html lang="en" class="lenis">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= Company::NAME->value; ?></title>
    <link rel="icon" href="img/logos/bl-logo-round.png">

    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BIZ+UDPMincho:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="https://unpkg.com/lenis@1.3.8/dist/lenis.css">

    <style>
        html.lenis {
            height: auto;
        }

        .lenis.lenis-smooth {
            scroll-behavior: auto;
        }

        .lenis.lenis-smooth [data-lenis-prevent] {
            overscroll-behavior: contain;
        }

        .lenis.lenis-stopped {
            overflow: hidden;
        }
    </style>
</head>

<body onload="startTime();">
    <header>

        <?php

        include('includes/nav-array.php');
        include('includes/nav-class.php');

        ?>

        <nav class="scale-up-center">
            <?php

            // foreach (array_slice($navBar, 0, 3) as $a) {
            //     echo '<a id="' . $a['id'] . '" href="' . $a['href'] . '">' . $a['icon'] . '' . $a['name'] . '</a>';
            // }
            $home = new NavItem('<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>', 'index.php', 'Home', 'index');
            $home->get_details();

            $about = new NavItem('<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
            </svg>', 'about.php', 'About', 'about');
            $about->get_details();

            $services = new NavItem('<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
            </svg>', 'services.php', 'Services', 'services');
            $services->get_details();

            ?>
        </nav>

        <div><img src="img/logos/bl-logo-round.png" alt="<?= Company::NAME->value; ?>"></div>

        <nav class="scale-up-center">
            <?php

            foreach (array_slice($navBar, 3, 6) as $b) {
                echo '<a id="' . $b['id'] . '" href="' . $b['href'] . '">' . $b['icon'] . '' . $b['name'] . '</a>';
            }

            ?>
        </nav>

        <div class="date-time">
            <div id="date"></div>
            <div>|</div>
            <div id="time"></div>
        </div>

        <!-- <div class="mode">
<div class="mode-sun">
    <i class='bx bx-sun'></i>
</div>
<div>
    <label>
        <input onClick="switchVariables();" type="checkbox">
        <span class="slider round"></span>
    </label>
</div>
<div class="mode-moon">
    <i class='bx bx-moon'></i>
</div>
</div> -->
    </header>