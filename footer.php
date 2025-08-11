<script src="script/variables.js?r=123"></script>

<footer>
    <?php

    include('includes/nav-array.php');


    ?>

    <nav>
        <h3>Pages</h3>
        <?php

        foreach ($navBar as $a) {
            echo '<a href="' . $a['href'] . '">' . $a['icon'] . '' . $a['name'] . '</a>';
        }

        ?>
    </nav>

    <nav>
        <h3>Social</h3>
        <?php

        foreach ($navBarFooter as $b) {
            echo '<a href="' . $b['href'] . '">' . $b['icon'] . '' . $b['name'] . '</a>';
        }

        ?>
    </nav>

    <nav>
        <h3>Opening Hours</h3>
        <?php

        foreach ($navBarFooterHours as $c) {
            echo '<p>' . $c['monday'] . '</p>';
            echo '<p>' . $c['tuesday'] . '</p>';
            echo '<p>' . $c['wednesday'] . '</p>';
            echo '<p>' . $c['thursday'] . '</p>';
            echo '<p>' . $c['friday'] . '</p>';
            echo '<p>' . $c['saturday'] . '</p>';
            echo '<p>' . $c['sunday'] . '</p>';
        }

        ?>
    </nav>


    <div><img src="img/logos/bl-logo-footer.png" alt="<?= Blcc::NAME->value; ?>"></div>

</footer>

