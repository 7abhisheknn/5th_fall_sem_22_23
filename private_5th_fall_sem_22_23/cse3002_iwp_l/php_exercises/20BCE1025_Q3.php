<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            width: 95px;
        }
    </style>
</head>

<body>
    <h1>Heart Rate</h1>
    <?php
    if (isset($_GET['number'])) {
        $age = floatval($_GET['number']);
        $upper =(220-$age) * 0.85;
        $lower=(220-$age) * 0.65;

    ?>
        <h3>Upper limit<?= $upper; ?><br>Lower limit <?= $lower; ?></h3>
        <button onclick="history.back()">Go Back</button>

    <?php } else { ?>
        <form name="form" action="" method="get">
            Dollars: <input type="text" name="number" id="number" placeholder="enter your age"><br>
            <input type="submit" value="Calculate"><input type="Reset" value="reset">
        </form>
    <?php } ?>

</body>

</html>