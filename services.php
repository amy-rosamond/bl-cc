<?php

include('includes/variables.php');
include('header.php');

echo '<div class="page-heading">
    <h1>Services</h1>
    <p data-aos="flip-right" data-aos-duration="500">All we can offer here at ' . Blcc::NAME->value . '.</p>
</div>';

include('footer.php');

?>

<script src="script/script.js?r=123"></script>

<script>
    window.addEventListener('load', function() {
        pageOnload('services');
    });
    
    // window.onload = function() {
    //     pageOnload('services');
    // }
</script>

</body>

</html>