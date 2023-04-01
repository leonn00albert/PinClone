<?php
require_once realpath(__DIR__ . "/vendor/autoload.php");
use Dotenv\Dotenv;$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
$images = file_get_contents("https://api.unsplash.com/photos/random?count=28&client_id=" . $_ENV['IMAGE_API']);
$images_res = json_decode($images,true);    


for ($i = 0; $i < 4; $i++) {
    echo '<div class="column">';
    $group  = array_slice($images_res, ($i * 4) + 3 ,7 );
  
    for ($j = 0; $j < 4; $j++) {
    
        echo <<<EX
        <div class="card">
        <img  class={$i}  src={$group[$j]['urls']['regular']} />
        <div class="overlay">
            <div class="card-details card-top">
            <span>Hello World <i class="fa fa-chevron-down" aria-hidden="true"> </i></span>
            <a class="save-button" href="#">Save</a>

            </div>
             <div class="card-details card-bottom">
             <span>
             <a class="link-pill" href="#"><i class="fa fa-external-link" aria-hidden="true"></i>Link</a>
            
            </span>
             <span>
                <a class="circle-button"><i class="fa fa-download" aria-hidden="true"></i></a>
                <a class="circle-button"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
             </span>
     
             </div>
            </div>
     </div>
     EX;

    }
    echo '</div>';
}
?>