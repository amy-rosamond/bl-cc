<?php

include('includes/variables.php');
include('header.php');

echo '<div class="project-card-container">';

class Project{

    public string $img;
    public string $title;
    public string $info;

    public function __construct(string $img, string $title, string $info){
        $this->img = $img;
        $this->title = $title;
        $this->info = $info;
    }

    private string $html = '';

    private function generateHtml(){
        $this->html .= '
        <div class="project-card">
            <div class="project-card-inner">
                <div class="project-card-front">
                    <img src="'.$this->img.'" alt="'.$this->title.'" >
                </div>
                <div class="project-card-back">
                    <h3>'.$this->title.'</h3><h5>'.$this->info.'</h5>';

        $this->html .= '
                </div>
            </div>
        </div>';
    }

    public function displayOutput(){
        $this->generateHtml();
        return $this->html;
    }

}

include('includes/projects-array.php');

foreach($projects as $p){
    $project = new Project($p['img'], $p['title'], $p['info']);
    

    echo $project->displayOutput();
}

echo '</div>';

include('footer.php');

?>