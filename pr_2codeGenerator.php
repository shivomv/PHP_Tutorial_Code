

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php

    $color  = $_GET['color'];
    $width  = $_GET['width'];
    $height  = $_GET['height'];
    $bs  = $_GET['borderSize'];
    $bcolor  = $_GET['bcolor'];

?>
        .box{
            background: <?php echo $color;?>;
            width: <?php echo $width;?>vw;
            height: <?php echo $height;?>vh;
            border: <?php echo $bs;?>px solid <?php echo $bcolor;?>;
        }
     
        
    </style>
    <title>Document</title>
</head>
<body>
    <div class="box"></div>
    <form action="" method="get">
        <label for="color">Background Color:</label><br>
        <input type="color" id="color" name="color" value="color"><br>

        <label for="width">width:</label><br>
        <input type="number" id="width" name="width" value="width"><br>

        <label for="height">height:</label><br>
        <input type="number" id="height" name="height" value="height"><br>

        <label for="borderSize">Border size:</label><br>
        <input type="number" id="border Size" name="borderSize" value="border Size"><br>

        <label for="bcolor">Background Color:</label><br>
        <input type="color" id="bcolor" name="bcolor" value="bcolor"><br>


        <input type="submit" value="Submit">
        </form> 
</body>
</html>