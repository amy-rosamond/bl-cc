<?php

include('includes/variables.php');
include('header.php');

echo '<div class="page-heading">
    <h1>About Us</h1>
    <p>Everything ' . Blcc::NAME->value . '.</p>
</div>';

include('footer.php');

?>

<script src="script/script.js?r=123"></script>

<script>
    window.addEventListener('load', function() {
        pageOnload('about');
    });
</script>

</body>

</html>