
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="semantic/semantic.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    
</head>

<body>

    <div class="container">
        <div class="ui menu">
            <a class="item active">
                Home
            </a>
            <a class="item">
                Today
            </a>
            <a class="item">
                Create <i class="fa fa-chevron-down" aria-hidden="true"> </i>
            </a>
            <div class="ui category search item">
                <div class="ui transparent icon input">
                     <i class="search link icon"></i>
                  <input class="prompt" type="text" placeholder="Search animals...">
                 
                </div>
                <div class="results"></div>
              </div>

            <div class="right menu">
                <a class="item">Sign Up</a>
                <a class="item">
                    Login
                </a>
            </div>
        </div>
        <div class="row">
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
        </div>
    </div>


    <script src="main.js">

    </script>
</body>

</html>