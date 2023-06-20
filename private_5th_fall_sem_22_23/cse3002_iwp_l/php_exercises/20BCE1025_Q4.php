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
    <h1>Salary Calculator</h1>
    <?php
    if (isset($_GET['gross'])&&isset($_GET['tax'])&&isset($_GET['pension'])) {
        $gross = floatval($_GET['gross']);
        $tax = floatval($_GET['tax']);
        $pension = floatval($_GET['pension']);
        $sallary=$gross*(1-($tax+$pension)/100.00);
    ?>
        <h3>Total salary (net income) paid is &nbsp;<?= $sallary; ?></h3>
        <button onclick="history.back()">Go Back</button>

    <?php } else { ?>
        <form name="form" action="" method="get">
            Gross Income: <input type="number" step="any" name="gross" id="gross" placeholder="Gross Income"><br>
            Tax Percentage: <input type="number" step="any" name="tax" id="tax" placeholder="Tax Percentage"><br>
            Pension insurance payment percentage: <br>( optional | default )
            <input type="number" step="any" name="pension" id="pension" value="4.3"><br>
            <input type="submit" value="Calculate"><input type="Reset" value="reset">
        </form>
    <?php } ?>

</body>

</html>