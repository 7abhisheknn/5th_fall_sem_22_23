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
    <h1>Distance converter</h1>
    <?php
    if (isset($_GET['distance'])&&isset($_GET['convertion'])) {
        $distance=floatval($_GET['distance']);
        $convertion=$_GET['convertion'];

        if ($convertion==="mtk"){ ?>
            <h3><?= $distance; ?> &nbsp; miles is = &nbsp; <?= 1.609*$distance; ?>&nbsp; kilometer</h3>
        <?php } else { ?>
            <h3><?= $distance; ?> &nbsp; kilometers is = &nbsp; <?= $distance/1.609; ?>&nbsp; miles </h3>
        <?php } ?>
        <button onclick="history.back()">Go Back</button>
    <?php } else { ?>
        <form name="form" action="" method="get">
            Distance: <input type="number" step="any" name="distance" placeholder="enter distance"><br>
            Select one option <br>
            <input type="radio" name="convertion" id="mtk" value="mtk"><label for="mtk">miles to kilometer</label><br>
            <input type="radio" name="convertion" id="ktm" value="ktm"><label for="ktm">kilometer to miles</label><br>
            <input type="submit" value="Submit"><input type="Reset" value="reset">
        </form>
    <?php } ?>

</body>

</html>