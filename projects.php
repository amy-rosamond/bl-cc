<?php

include('includes/variables.php');
include('header.php');

echo '<div class="page-heading" style="background-color: var(--dark-grey);padding-bottom:70px;">
    <h1>Projects</h1>
    <p>Check out all our hard work here at ' . Blcc::NAME->value . '.</p>
</div>';


echo '<div class="project-card-container">';

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
        <div class="project-card-wrapper">
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

include('includes/projects-array.php');

foreach ($projects as $p) {
    $project = new Project($p['img'], $p['title'], $p['info'], $p['bgtitle'], $p['bginfo']);


    echo $project->displayOutput();
}

echo '</div>';

include('footer.php');

?>

<script src="script/script.js?r=123"></script>

<script>
    window.addEventListener('load', function() {
        pageOnload('projects');
    });
    
    // window.onload = function() {
    //     pageOnload('projects');
    // }
</script>

</body>

</html>
