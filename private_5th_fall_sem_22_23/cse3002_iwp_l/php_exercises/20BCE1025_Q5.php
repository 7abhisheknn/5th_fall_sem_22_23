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
    <h1>Annuity calculator</h1>
    <?php
    if (isset($_GET['interest'])&&isset($_GET['months'])&&isset($_GET['capital'])) {
        $interest = floatval($_GET['interest']);
        $months = intval($_GET['months']);
        $capital = floatval($_GET['capital']);
        $annuity=(($interest*(pow(1+$interest,$months)))/(pow(1+$interest,$months)-1))*$capital;
    ?>
    <h3>Annuity is &nbsp;
        <?= $annuity; ?>
    </h3>
    <button onclick="history.back()">Go Back</button>

    <?php } else { ?>
    <form name="form" action="" method="get">
        Interest: <input type="number" step="any" name="interest" placeholder="enter interest"><br>
        Time in months: <input type="number" name="months" placeholder="enter time in months"><br>
        Capital: <input type="number" step="any" name="capital" placeholder="enter capital"><br>
        <input type="submit" value="Calculate"><input type="Reset" value="reset">
    </form>
    <?php } ?>

</body>

</html>