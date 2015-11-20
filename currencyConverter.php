<?php

include('inc/currencyHelpers.php');
include('inc/currencyMenu.php');

$fromMenu = new selectMenu;
$fromMenu->setOptions($currencyArray);
$toMenu = new selectMenu;
$toMenu->setOptions($currencyArray);


?>

<html>
<header>
  <title>Currency Converter</title>
</header>
<body align=center>
  <h1>Currency Converter</h1>
  <form method="POST">
    <label for="amount">Amount:</label>
    <input name="amount" /><br>
    <label for="from">From:</label>
    <?php echo $fromMenu->makeFromMenu(); ?><br>
    <label for="to">To:</label>
    <?php echo $toMenu->makeToMenu(); ?><br>
    <input type="submit" />
  </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $response = currencyConverter($_POST['from'], $_POST['to'], $_POST['amount']);
}
?>
