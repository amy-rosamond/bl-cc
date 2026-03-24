<?php

include('includes/variables.php');
include('includes/projects-array.php');
include('includes/projects-class.php');
include('header.php');

echo '<div class="container container-dark" style="margin-top:0px;">
    <h1 id="projects">Projects</h1>
    <p data-aos="flip-right" data-aos-duration="500">Check out all our hard work here at ' . Company::NAME->value . '.</p>
</div>';

?>

<div class="project-nav container container container-overlap">
    <nav class="container-light scale-in-hor-center">
        <?php

        foreach ($navBarProjects as $a) {
            echo '<a onClick="{( => { lenis?.scrollTo("' . $a['href'] . '");} }" href="' . $a['href'] . '">' . $a['name'] . '</a>';
        }

        ?>
    </nav>
</div>

<?php


// ARRAY
foreach ($kitchensInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="container container-dark" style="padding-top: 60px;">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

echo '<div class="container-overlap container-overlap-large"><div class="project-card-container">';

// CLASS
foreach ($kitchens as $p) {
    $project = new Project($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


    echo $project->displayOutput();
}

echo '</div><div class="project-back-to-top"><a href="#projects" class="a-button">Back to top</a></div>';


// ARRAY
foreach ($doorsInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="container container-dark">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

echo '<div class="container-overlap container-overlap-large"><div class="project-card-container">';

//CLASS
foreach ($doors as $p) {
    $project = new Project($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


    echo $project->displayOutput();
}

echo '</div><div class="project-back-to-top"><a href="#projects" class="a-button">Back to top</a></div>';


// ARRAY
foreach ($roofsInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="container container-dark">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

echo '<div class="container-overlap container-overlap-large"><div class="project-card-container">';

// CLASS
foreach ($roofs as $p) {
    $project = new Project($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


    echo $project->displayOutput();
}

echo '</div><div class="project-back-to-top"><a href="#projects" class="a-button">Back to top</a></div>';


// ARRAY
foreach ($joineryInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="container container-dark">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

echo '<div class="container-overlap container-overlap-large"><div class="project-card-container">';

// CLASS
foreach ($joinery as $p) {
    $project = new Project($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


    echo $project->displayOutput();
}

echo '</div><div class="project-back-to-top"><a href="#projects" class="a-button">Back to top</a></div>';


// ARRAY
foreach ($frameworkInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="container container-dark">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

echo '<div class="container-overlap container-overlap-large"><div class="project-card-container">';

// CLASS
foreach ($framework as $p) {
    $project = new Project($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


    echo $project->displayOutput();
}

echo '</div><div class="project-back-to-top"><a href="#projects" class="a-button">Back to top</a></div>';


// ARRAY
foreach ($secondFixInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="container container-dark">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

echo '<div class="container-overlap container-overlap-large"><div class="project-card-container">';

// CLASS
foreach ($secondFix as $p) {
    $project = new Project($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


    echo $project->displayOutput();
}

echo '</div><div class="project-back-to-top"><a href="#projects" class="a-button">Back to top</a></div>';

// ARRAY
foreach ($flooringInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="container container-dark">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

echo '<div class="container-overlap container-overlap-large"><div class="project-card-container">';

// CLASS
foreach ($flooring as $p) {
    $project = new Project($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


    echo $project->displayOutput();
}

echo '</div><div class="project-back-to-top"><a href="#projects" class="a-button">Back to top</a></div>';


// ARRAY
foreach ($constructionInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="container container-dark">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

echo '<div class="container-overlap container-overlap-large"><div class="project-card-container">';

// CLASS
foreach ($construction as $p) {
    $project = new Project($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


    echo $project->displayOutput();
}

echo '</div><div class="project-back-to-top"><a href="#projects" class="a-button">Back to top</a></div>';




include('footer.php');

?>

<script src="script/script.js?r=123"></script>

<script>
    window.addEventListener('load', function() {
        pageOnload('projects');
    });
</script>

</body>

</html>