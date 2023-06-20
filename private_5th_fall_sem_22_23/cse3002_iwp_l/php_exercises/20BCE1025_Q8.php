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
    <h1>Thermometer converter</h1>
    <?php
    if (isset($_GET['temperature'])&&isset($_GET['convertion'])) {
        $temperature=floatval($_GET['temperature']);
        $convertion=$_GET['convertion'];

        if ($convertion==="ctf"){ ?>
            <h3><?= $temperature; ?> &nbsp; celcius is = &nbsp; <?= $temperature*9/5+32; ?>&nbsp; Fahrenheit </h3>
        <?php } else { ?>
            <h3><?= $temperature; ?> &nbsp; fahrenheit is = &nbsp; <?= ($temperature-32)*5/9; ?>&nbsp; Celcius</h3>
        <?php } ?>
        <button onclick="history.back()">Go Back</button>
    <?php } else { ?>
        <form name="form" action="" method="get">
            Temperature: <input type="number" step="any" name="temperature" placeholder="enter temperature"><br>
            Select one option <br>
            <input type="radio" name="convertion" id="ctf" value="ctf"><label for="ctf">Celcius to Fahrenheit</label><br>
            <input type="radio" name="convertion" id="ftc" value="ftc"><label for="ftc">Fahrenheit to Celcius</label><br>
            <input type="submit" value="Submit"><input type="Reset" value="reset">
        </form>
    <?php } ?>

</body>

</html>