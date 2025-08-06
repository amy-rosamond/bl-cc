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
            echo '<a >' . $c['monday'] . '</a>';
            echo '<a >' . $c['tuesday'] . '</a>';
            echo '<a >' . $c['wednesday'] . '</a>';
            echo '<a >' . $c['thursday'] . '</a>';
            echo '<a >' . $c['friday'] . '</a>';
            echo '<a >' . $c['saturday'] . '</a>';
            echo '<a >' . $c['sunday'] . '</a>';
        }

        ?>
    </nav>


    <div><img src="img/logos/baseit-logo.png" alt="<?= Baseit::NAME->value; ?>"></div>

</footer>

</html>