<?php

include('includes/variables.php');
include('header.php');

echo '<div class="page-heading">
    <h1>Reviews</h1>
    <p data-aos="flip-right" data-aos-duration="500">Read all of ' . Company::NAME->value . '\'s great reviews.</p>
</div>';

include('footer.php');

?>

<script src="script/script.js?r=123"></script>

<script>
    window.addEventListener('load', function() {
        pageOnload('reviews');
    });
    
    // window.onload = function() {
    //     pageOnload('reviews');
    // }
</script>

</body>

</html>