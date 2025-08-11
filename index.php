<?php

include('includes/variables.php');
include('header.php');

// function changePage($page) {
//     switch ($page) {
//         case 'home':
//             include('pages/home.php');
//         break;
//         case 'contact':
//             include('contact.php');
//         break;
//         default:
//             include('home.php');
//         break;
//     }
// }

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