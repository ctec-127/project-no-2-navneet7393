<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Project 2 - Page 2</title>
</head>
<body class="solution-content">
<?php
    //header
    require "req/header.req.php";   

    echo "<h1 class='results'>Here are the reult(s):</h1>";

    // if ($_SERVER["REQUEST_METHOD"]=="GET"){
    //     //pony first
    //     if (isset($_GET["pony"])) {
    //         echo "<img src=\"https://i.ytimg.com/vi/cHjnNKzsmq8/maxresdefault.jpg\" alt=\"Pony\">";
    //     }

    //     if (isset($_GET["poem"])) {
    //         if (strtolower($_GET["poem"]) == "bruce") {
    //             echo "bruce is so cool";
    //         } elseif (strtolower($_GET["poem"])=="gayle") {
    //             echo "i love bruce";
    //         }
    //     }
echo "<div class='main'>";
        $warning = "<p class='bg-danger text-white'>Please choose the correct option to display results on this page.</p>";
        $lorrem = "<p class='lorrem'>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like.</p>";

    if ($_SERVER["REQUEST_METHOD"]=="GET"){
        if (isset($_GET["color1"])=="yellow") {
            echo '<body style="background-color:yellow">';
            echo $lorrem;
            }
        elseif (isset($_GET["color2"])=="purple") {
            echo '<body style="background-color:purple">';
            echo $lorrem;
            }
        elseif (isset($_GET["color3"])=="green") {
            echo '<body style="background-color:green">';
            echo $lorrem;
            } 
        elseif (isset($_GET["superhero1"])=="superman") {
                    echo "<img src=\"https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/mh-supermen-1574086730.png?crop=0.454xw:0.907xh;0.0176xw,0&resize=640:*\" alt=\"superman\">";
            }
        elseif (isset($_GET["superhero2"])=="batman") {
                echo "<img src=\"https://img.cinemablend.com/filter:scale/quill/c/7/9/9/5/4/c79954330fb8636f8f77b04d070c8f2e87f5adfe.jpg?mw=600\" alt=\"batman\">";
            } 
        elseif (isset($_GET["lyrics1"])=="guns-n-roses") {
            echo "<p>He's got a smile that it seems to me <br>
            Reminds me of childhood memories<br>
            Where everything<br>
            Was as fresh as the bright blue sky<br>
            
            Now and then when I see his face<br>
            He takes me away to that special place<br>
            And if I stared too long<br>
            I'd probably break down and cry<br>
            
            Sweet child o' mine<br>
            Sweet love o'mine<br>
            
            He's got eyes of the bluest skies<br>
            As if they thought of rain<br>
            I hate to look into those eyes<br>
            And see an ounce of pain<br>
            
            His hair reminds me<br>
            Of a warm safe place<br>
            Where as a child I'd hide<br>
            And pray for the thunder<br>
            And the rain<br>
            To quietly pass me by<br>
            
            Sweet child o' mine<br>
            Sweet love o'mine<br>
            Sweet child o' mine<br>
            Sweet love o'mine<br>
            
            Where do we go<br>
            Where do we go now<br>
            Where do we go<br>
            Where do we go<br>
            Where do we go now<br>
            Where do we go<br>
            Where do we go<br>
            Sweet child<br>
            Where do we go now<br>
            
            Where do we go<br>
            Where do we go sweet child<br>
            Where do we go now [Repeat until end]</p>";
        }
        elseif (isset($_GET["lyrics2"])=="green-day") {
            echo "<p>Do you know what's worth fighting for<br>
            When it's not worth dying for?<br>
            Does it take your breath away<br>
            And you feel yourself suffocating?<br>
            Does the pain weigh out the pride?<br>
            And you look for a place to hide?<br>
            Did someone break your heart inside?<br>
            You're in ruins<br>
            
            One, twenty one guns<br>
            Lay down your arms<br>
            Give up the fight<br>
            One, twenty one guns<br>
            Throw up your arms into the sky,<br>
            You and I<br>
            
            When you're at the end of the road<br>
            And you lost all sense of control<br>
            And your thoughts have taken their toll<br>
            When your mind breaks the spirit of your soul<br>
            Your faith walks on broken glass<br>
            And the hangover doesn't pass<br>
            Nothing's ever built to last<br>
            You're in ruins
            
            One, twenty one guns<br>
            Give up the fight<br>
            One, twenty one guns<br>
            Throw up your arms into the sky,<br>
            You and I<br>
            
            Did you try to live on your own<br>
            When you burned down the house and home?<br>
            Did you stand too close to the fire?<br>
            Like a liar looking for forgiveness from a stone<br>
            
            When it's time to live and let die<br>
            And you can't get another try<br>
            Something inside this heart has died<br>
            You're in ruins
            
            One, twenty one guns<br>
            Lay down your arms<br>
            Give up the fight<br>
            One, twenty one guns<br>
            Throw up your arms into the sky,<br>
            
            One, twenty one guns<br>
            Lay down your arms<br>
            Give up the fight<br>
            One, twenty one guns<br>
            Throw up your arms into the sky,<br>
            You and I</p>";
        }
        elseif (isset($_GET["pic1"])=="cat") {
            echo "<img src=\"https://hips.hearstapps.com/ghk.h-cdn.co/assets/17/30/pembroke-welsh-corgi.jpg\" alt=\"dog\">";
        }
        elseif (isset($_GET["pic2"])=="cat") {
            echo "<img src=\"https://icatcare.org/app/uploads/2018/07/Thinking-of-getting-a-cat.png\" alt=\"cat\">";
        }
        elseif (isset($_GET["pic3"])=="lion") {
            echo "<img src=\"https://a57.foxnews.com/static.foxnews.com/foxnews.com/content/uploads/2019/12/931/524/lion-king-photo-2.jpg?ve=1&tl=1\" alt=\"lion\">";
        }
        elseif (isset($_GET["font1"])=="times") {
            echo "<p class='times'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

            Why do we use it?
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            <p>";
        }
        elseif (isset($_GET["font2"])=="arial") {
            echo "<p class='arial'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    
            Why do we use it?
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            <p>";   
        }     
        elseif (isset($_GET["southpark1"])=="kenny") {
            echo "<img src=\"https://images.ladbible.com/thumbnail?type=jpeg&url=http://20.theladbiblegroup.com/s3/content/961ec2f55a1d2817f0d58f96aec56f88.png&quality=70&width=720\" alt=\"kenny\">";
        }
        elseif (isset($_GET["southpark2"])=="kenny") {
            echo "<img src=\"https://ibhuluimcom-a.akamaihd.net/ib.huluim.com/video/40005844?size=640x360\" alt=\"kyle\">";
        }
        elseif (isset($_GET["southpark3"])=="stan") {
            echo "<img src=\"https://s3.amazonaws.com/blogs.comedycentral.com-production/wp-content/uploads/sites/58/2019/05/All-About-Stan-blog.jpg\" alt=\"stan\">";
        }
        else {
            echo $warning;
        }
    }
echo "</div>";

echo"<br>";
?>

<?php
    // footer
    require "req/footer.req.php";   
?>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>