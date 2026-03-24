<?php

include('includes/variables.php');
include('header.php');

echo '<div class="page-heading">
    <h1>Welcome to ' . Company::NAME->value . '.</h1>
    <p data-aos="flip-right" data-aos-duration="500">For all your Carpentry & Construction needs.</p>
</div>';

?>

<!-- <script>
    window.onload = function() {
        pageOnload('index;')
    }
</script> -->

<?php

include('footer.php');

?>

<script src="script/script.js?r=123"></script>

<script>
    window.addEventListener('load', function() {
        pageOnload('index');
    });
    // window.onload = function() {
    //     pageOnload('index');
    // }
</script>

</body>

</html>