<!DOCTYPE html>
<html lang="en" class="lenis">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= Blcc::NAME->value; ?></title>
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

        ?>

        <nav class="scale-up-center">
            <?php

            foreach (array_slice($navBar, 0, 3) as $a) {
                echo '<a id="' . $a['id'] . '" href="' . $a['href'] . '">' . $a['icon'] . '' . $a['name'] . '</a>';
            }

            ?>
        </nav>

        <div><img src="img/logos/bl-logo-round.png" alt="<?= Blcc::NAME->value; ?>"></div>

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