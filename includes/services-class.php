<?php

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

class service
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
        <div class="service-card" data-aos="slide-up" data-aos-duration="500">
            <div class="service-card-img">
                <img src="' . $this->img . '" alt="' . $this->title . '">
                <div class="service-card-img-info">
                    <h3>' . $this->bgtitle . '</h3>
                    <p>' . $this->bginfo . '</p>
                </div>
            </div>
            <div>
                <h2>' . $this->title . '</h2>
                <p>' . $this->info . '</p>
            </div>
        </div>
        ';
    }

    public function displayOutput()
    {
        $this->generateHtml();
        return $this->html;
    }
}



$kitchens = array();

$kitchens[1] = array(
    'img' => 'img/services/kitchens/kitchen-sink.jpg',
    'title' => 'Kitchen Sink',
    'info' => 'Look at all this information I can put in this little space down here! Great to include any extra information you might need.',
    'bgtitle' => 'Installed in a St Albans home.',
    'bginfo' => 'Simple but effective.'
);

$kitchens[2] = array(
    'img' => 'img/services/kitchens/kitchen-blue.jpg',
    'title' => 'Kitchen Installation',
    'info' => 'Kitchens come in all different shapes and sizes. Write about them here for added information.<br><br>More information on the Kitchen Installation! So much room for information and text down here.',
    'bgtitle' => 'Built beyond expectation.',
    'bginfo' => 'Spacious and useful.'
);

$kitchens[3] = array(
    'img' => 'img/services/kitchens/kitchen-white.jpg',
    'title' => 'Kitchen Installation',
    'info' => 'More information on a different Kitchen Installation! So much room for information and text down here.',
    'bgtitle' => 'extra title',
    'bginfo' => 'Modern simplicity.'
);



$doors = array();

$doors[1] = array(
    'img' => 'img/services/bl-logo-no-text-cropped.jpg',
    'title' => 'Front Door Installation',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);

$doors[2] = array(
    'img' => 'img/services/bl-logo-no-text-cropped.jpg',
    'title' => 'Back Door Installation',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);

$doors[3] = array(
    'img' => 'img/services/bl-logo-no-text-cropped.jpg',
    'title' => 'Door Installation',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);



$roofs = array();

$roofs[1] = array(
    'img' => 'img/services/roofs/before-roof.jpg',
    'title' => 'Roof Installation',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);

$roofs[2] = array(
    'img' => 'img/services/roofs/window-roof.jpg',
    'title' => 'Roof Installation',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);

$roofs[3] = array(
    'img' => 'img/services/bl-logo-no-text-cropped.jpg',
    'title' => 'Roof Installation',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);



$joinery = array();

$joinery[1] = array(
    'img' => 'img/services/bl-logo-no-text-cropped.jpg',
    'title' => 'Bespoke Joinery',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);

$joinery[2] = array(
    'img' => 'img/services/bl-logo-no-text-cropped.jpg',
    'title' => 'Bespoke Joinery',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);

$joinery[3] = array(
    'img' => 'img/services/bl-logo-no-text-cropped.jpg',
    'title' => 'Bespoke Joinery',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);



$framework = array();

$framework[1] = array(
    'img' => 'img/services/bl-logo-no-text-cropped.jpg',
    'title' => 'Frame-work',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);

$framework[2] = array(
    'img' => 'img/services/bl-logo-no-text-cropped.jpg',
    'title' => 'Frame-work',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);

$framework[3] = array(
    'img' => 'img/services/bl-logo-no-text-cropped.jpg',
    'title' => 'Frame-work',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);



$secondFix = array();

$secondFix[1] = array(
    'img' => 'img/services/bl-logo-no-text-cropped.jpg',
    'title' => 'Second Fix',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);

$secondFix[2] = array(
    'img' => 'img/services/bl-logo-no-text-cropped.jpg',
    'title' => 'Second Fix',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);

$secondFix[3] = array(
    'img' => 'img/services/bl-logo-no-text-cropped.jpg',
    'title' => 'Second Fix',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);



$flooring = array();

$flooring[1] = array(
    'img' => 'img/services/flooring/hallway.jpg',
    'title' => 'Flooring',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);

$flooring[2] = array(
    'img' => 'img/services/bl-logo-no-text-cropped.jpg',
    'title' => 'Flooring',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);

$flooring[3] = array(
    'img' => 'img/services/bl-logo-no-text-cropped.jpg',
    'title' => 'Flooring',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);



$construction = array();

$construction[1] = array(
    'img' => 'img/services/bl-logo-no-text-cropped.jpg',
    'title' => 'Construction',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);

$construction[2] = array(
    'img' => 'img/services/bl-logo-no-text-cropped.jpg',
    'title' => 'Construction',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);

$construction[3] = array(
    'img' => 'img/services/bl-logo-no-text-cropped.jpg',
    'title' => 'Construction',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
    'bgtitle' => 'extra title',
    'bginfo' => 'extra info'
);



// $firstFix = array();

// $firstFix[1] = array(
//     'img' => 'img/services/bl-logo-no-text-cropped.jpg',
//     'title' => 'First Fix',
//     'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
//     'bgtitle' => 'extra title',
//     'bginfo' => 'extra info'
// );

// $firstFix[2] = array(
//     'img' => 'img/services/bl-logo-no-text-cropped.jpg',
//     'title' => 'First Fix',
//     'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
//     'bgtitle' => 'extra title',
//     'bginfo' => 'extra info'
// );

// $firstFix[3] = array(
//     'img' => 'img/services/bl-logo-no-text-cropped.jpg',
//     'title' => 'First Fix',
//     'info' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
//     'bgtitle' => 'extra title',
//     'bginfo' => 'extra info'
// );


?>