<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Project 2 - Page 1</title>
</head>
<body>
<?php
    //header
    require "req/header.req.php";   
?>

<div class="wrapper">
    
    <h3>Project No. 2</h3> <br>
    <h4>Parameter No.1</h4>
    <!-- <p>To show a picture of a pony add the url query parameter as follows: <br>
    http://page2.php?pony
    </p>
    Heres a working example: <a href="page2.php?pony=1">Show a picture of a pony</a>
    <br>
    <a href="page2.php?poem=bruce">Bruce's great poem</a>
    <br>
    <a href="page2.php?poem=gayle">Gayles's great poem</a>
    <br> -->
    <h5>Background Color</h5>
    <div class="bgrnd-color">
    <p>Please chose a color:</p>
        <a href="page2.php?color1=yellow"><img src="img/Capture.PNG" alt="Yellow"></a>
        <a href="page2.php?color2=purple"><img src="img/Capture2.png" alt="Purple"></a>
        <a href="page2.php?color3=green"><img src="img/Capture3.png" alt="Green"></a>
        <p>To show a background color add the url query parameter as follows: <br>
        http://page2.php?color1=yellow <br>
        http://page2.php?color1=yellow <br>
        http://page2.php?color1=yellow
        </p>
    </div> 
    <br>

    <h4>Parameter No.2</h4>
    <div class="images">
    <p>Please click on the link to chose a image: </p>
        <a href="page2.php?superhero1=superman">Superman</a> <br>
        <a href="page2.php?superhero2=batman">Batman</a>
        <p>To view and change a superhero add the url query parameter as follows: <br>
        http://page2.php?superhero1=superman <br>
        http://page2.php?superhero2=batman
        </p>    
    </div><br>

    <h4>Parameter No.4</h4>
    <div class="lyrics">
    <p>Click on the button to view lyrics:</p>
        <a href="page2.php?lyrics1=guns-n-roses" class="btn btn-dark">Guns n Roses - Sweet Child O' Mine</a>
        <a href="page2.php?lyrics2=green-day" class="btn btn-primary">Green Day - 21 Guns</a>
        <p>To view and change the lyrics add the url query parameter as follows: <br>
        http://page2.php?lyrics1=guns-n-roses <br>
        http://page2.php?lyrics2=green-day
        </p>   
    </div><br>

    <h4>Parameter No.5</h4>
    <div class="images2">
    <p>Please click on the button to pick a animal: </p>
        <a href="page2.php?pic1=dog" class="btn btn-outline-dark">Dog</a> <br> <br>
        <a href="page2.php?pic2=cat" class="btn btn-outline-danger">Cat</a> <br> <br>
        <a href="page2.php?pic3=lion" class="btn btn-outline-secondary">Lion</a>
        <p>To view and change the pets add the url query parameter as follows: <br>
        http://page2.php?pic1=dog <br>
        http://page2.php?pic2=cat <br>
        http://page2.php?pic3=lion
        </p>   
    </div><br>

    <h4>Parameter No.6</h4>
    <p>Changing Fonts</p>
    <a href="page2.php?font1=times" class="btn btn-light">Times New Roman</a> <br> <br>
    <a href="page2.php?font2=arial" class="btn btn-dark">Arial</a>
    <p>To view and change the font style add the url query parameter as follows: <br>
        http://page2.php?font1=times <br>
        http://page2.php?font2=arial <br>
        It will be displayed with some Lorrem Ipsum on page2.
    </p>   

    <h4>Parameter No.7</h4>
    <p>Choose a SouthPark Character:</p>
    <a href="page2.php?southpark1=kenny" class="btn btn-dark">Kenny</a> <br> <br>
    <a href="page2.php?southpark2=kyle" class="btn btn-light">Kyle</a> <br> <br>
    <a href="page2.php?southpark3=stan" class="btn btn-primary">Stan</a>
    <p>To view and change a Southpark character add the url query parameter as follows: <br>
        http://page2.php?southpark1=kenny <br>
        http://page2.php?southpark2=kyle <br>
        http://page2.php?southpark3=stan

    </p>   

   </div>

<?php
    //footer
    require "req/footer.req.php"; 
?>
    
<script src="js/bootstrap.min.js"></script>
</body>
</html>
