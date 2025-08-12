<?php

include('includes/projects-array.php');
include('includes/variables.php');
include('header.php');

echo '<div class="page-heading">
    <h1>Projects</h1>
    <p data-aos="flip-right" data-aos-duration="500">Check out all our hard work here at ' . Blcc::NAME->value . '.</p>
</div>';

?>

<div class="project-nav page-heading-overlap">
    <nav class="scale-in-hor-center">
        <?php

        foreach ($navBarProjects as $a) {
            echo '<a onClick="{( => { lenis?.scrollTo("' . $a['href'] . '");} }" href="' . $a['href'] . '">' . $a['name'] . '</a>';
        }

        ?>
    </nav>
</div>

<?php

// echo '<div id="kitchens" class="page-heading container-overlap" style="padding-top: 60px;">
//     <h2>Kitchens</h2>
//     <p>Take a look at ' . Blcc::NAME->value . '\'s kitchen work.</p>
// </div>';

foreach ($kitchensInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="page-heading container-overlap" style="padding-top: 60px;">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

echo '<div class="project-card-container container-overlap container-overlap-projects">';

class Project
{

    public string $img;
    public string $title;
    public string $info;
    public string $bgtitle;
    public string $bginfo;

    public function __construct(string $img, string $title, string $info, string $bgtitle, string $bginfo)
    {
        $this->img = $img;
        $this->title = $title;
        $this->info = $info;
        $this->bgtitle = $bgtitle;
        $this->bginfo = $bginfo;
    }

    private string $html = '';

    private function generateHtml()
    {
        $this->html .= '
        <div class="project-card-wrapper" data-aos="zoom-in-up" data-aos-duration="500">
            <div class="project-card">
                <div class="project-card-inner">
                    <div class="project-card-front">
                        <img src="' . $this->img . '" alt="' . $this->title . '" >
                        <div class="project-card-back">
                        <h3>' . $this->bgtitle . '</h3><p>' . $this->bginfo . '</p>';

        $this->html .= '
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-card-info"><h2>' . $this->title . '</h2><p>' . $this->info . '</p></div>
        </div>';
    }

    public function displayOutput()
    {
        $this->generateHtml();
        return $this->html;
    }
}


foreach ($kitchens as $p) {
    $project = new Project($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


    echo $project->displayOutput();
}

echo '</div>';


// echo '<div id="doors" class="page-heading container-overlap">
//     <h2>Doors</h2>
//     <p>Take a look at ' . Blcc::NAME->value . '\'s door work.</p>
// </div>';

foreach ($doorsInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="page-heading container-overlap" style="padding-top: 60px;">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

echo '<div class="project-card-container container-overlap container-overlap-projects">';

foreach ($doors as $p) {
    $project = new Project($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


    echo $project->displayOutput();
}

echo '</div>';


// echo '<div id="roofs" class="page-heading container-overlap">
//     <h2>Roofs</h2>
//     <p>Take a look at ' . Blcc::NAME->value . '\'s roof work.</p>
// </div>';

foreach ($roofsInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="page-heading container-overlap" style="padding-top: 60px;">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

echo '<div class="project-card-container container-overlap container-overlap-projects">';

foreach ($roofs as $p) {
    $project = new Project($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


    echo $project->displayOutput();
}

echo '</div>';


// echo '<div id="joinery" class="page-heading container-overlap">
//     <h2>Bespoke Joinery</h2>
//     <p>Take a look at ' . Blcc::NAME->value . '\'s bespoke joinery work.</p>
// </div>';
foreach ($joineryInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="page-heading container-overlap" style="padding-top: 60px;">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

echo '<div class="project-card-container container-overlap container-overlap-projects">';

foreach ($joinery as $p) {
    $project = new Project($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


    echo $project->displayOutput();
}

echo '</div>';


// echo '<div id="framework" class="page-heading container-overlap">
//     <h2>Stud-work</h2>
//     <p>Take a look at ' . Blcc::NAME->value . '\'s Stud-work.</p>
// </div>';
foreach ($frameworkInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="page-heading container-overlap" style="padding-top: 60px;">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

echo '<div class="project-card-container container-overlap container-overlap-projects">';

foreach ($framework as $p) {
    $project = new Project($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


    echo $project->displayOutput();
}

echo '</div>';


foreach ($secondFixInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="page-heading container-overlap" style="padding-top: 60px;">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

echo '<div class="project-card-container container-overlap container-overlap-projects">';

foreach ($secondFix as $p) {
    $project = new Project($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


    echo $project->displayOutput();
}

echo '</div>';


foreach ($flooringInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="page-heading container-overlap" style="padding-top: 60px;">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

echo '<div class="project-card-container container-overlap container-overlap-projects">';

foreach ($flooring as $p) {
    $project = new Project($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


    echo $project->displayOutput();
}

echo '</div>';


foreach ($constructionInfo as $b) {
    echo '<div id="' . $b['id'] . '" class="page-heading container-overlap" style="padding-top: 60px;">
    <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
    <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
</div>';
}

echo '<div class="project-card-container container-overlap container-overlap-projects">';

foreach ($construction as $p) {
    $project = new Project($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


    echo $project->displayOutput();
}

echo '</div>';


// foreach ($firstFixInfo as $b) {
//     echo '<div id="' . $b['id'] . '" class="page-heading container-overlap" style="padding-top: 60px;">
//     <h2 data-aos="flip-right" data-aos-duration="500">' . $b['title'] . '</h2>
//     <p data-aos="flip-right" data-aos-duration="500">' . $b['info'] . '</p>
// </div>';
// }

// echo '<div class="project-card-container container-overlap container-overlap-projects">';

// foreach ($firstFix as $p) {
//     $project = new Project($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


//     echo $project->displayOutput();
// }

// echo '</div>';




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