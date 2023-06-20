<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>

<body>
    <h1>(Ski-)Housing allowance</h1>
    <?php
    if (isset($_GET['height'])&&isset($_GET['type'])) {
        $height=floatval($_GET['height']);
        $type=$_GET['type'];
        $stick=0;
        
        if ($type==="ccc") $stick=$height*0.9;
        else if ($type==="ccfs") $stick=$height*0.85;
        else $stick=$height*0.68;
        ?>
        <h3> Height of the stick should be about &nbsp;<?= $stick; ?> &nbsp; centimeters</h3>
        <button onclick="history.back()">Go Back</button>
    <?php } else { ?>
        <form name="form" action="" method="get">
            Your height (in centimeters): <input type="number" step="any" name="height" placeholder="enter height"><br>
            <input type="submit" value="Calculate"><input type="Reset" value="reset">
        </form>
    <?php } ?>

</body>

</html>