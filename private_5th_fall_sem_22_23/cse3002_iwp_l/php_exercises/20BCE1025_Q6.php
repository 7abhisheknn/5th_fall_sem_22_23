<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            height: 300px;
            width: 500px;
        }
        #make_center{
            text-align: center;
            width: 600px;
        }
        #make_center input, img{
            margin: 10px;
        }
        table, td, tr{
            border: 2px solid grey;
        }
        td:last-child { 
            border: none;
            padding: 20px;
        }
    </style>
</head>

<body>
    <h1>What is this picture</h1>
    <?php
    if (isset($_GET['img'])&&isset($_GET['choosed'])) {
        $img=$_GET['img'];
        $choosed=$_GET['choosed'];
        if ($img===$choosed){ ?>
            <h3> Correct answer</h3>
        <?php } else { ?>
            <h3> Wrong answer</h3>
        <?php } ?>
        <a href="http://localhost/php_exercises/20BCE1025_Q9.php">Go back</a>

    <?php } else { 
            $arr=[
                "https://i.picsum.photos/id/237/536/354.jpg?hmac=i0yVXW1ORpyCZpQ-CknuyV-jbtU7_x9EBQVhvT5aRr0",
                "https://images.unsplash.com/photo-1458724338480-79bc7a8352e4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80",
                "https://i.picsum.photos/id/1024/1920/1280.jpg?hmac=-PIpG7j_fRwN8Qtfnsc3M8-kC3yb0XYOBfVzlPSuVII",
                "https://images.unsplash.com/flagged/1/apple-gear-looking-pretty.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80",
            ];
            $r=rand(0,3);
            $link=$arr[$r];
        ?>
        <form name="form" action="" method="get">
            <table>
                <tr>
                    <td rowspan="4"><img src="<?=$link;?>" alt=""></td>
                    <input type="hidden" name="img" value="<?=$r;?>">
                    <td>
                        <label for="0">Dog</label>
                        <input type="radio" name="choosed" id="0" value="0">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="1">Lion</label>
                        <input type="radio" name="choosed" id="1" value="1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="2">Bird</label>
                        <input type="radio" name="choosed" id="2" value="2">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="3">Laptop</label>
                        <input type="radio" name="choosed" id="3" value="3">
                    </td>
                </tr>
            </table>
            <div id="make_center">

                <input type="submit" value="Answer"><input type="Reset" value="reset">
            </div>
        </form>
    <?php } ?>

</body>

</html>