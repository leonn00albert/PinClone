
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
            <a class="item" id="create-btn">
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
                <a class="item" id="login-btn">
                    Login
                </a>
            </div>
        </div>
        <div class="row">
        <?php
        include("Cards.php");
        ?>
        </div>
        <?php
          include("login-modal.php");
          include("create-modal.php");
        ?>
    </div>


    <script src="main.js">

    </script>
</body>

</html>