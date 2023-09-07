<!DOCTYPE html>
<html>
<head>
    <title>Trans 7 IT Department Test Session</title>
</head>
<body>

<h2>Soal Nomor 1 - Stephanus Yogi</h2>

<form method="post" action="">
    Counter: <input type="text" name="counter">
    <input type="submit" name="submit" value="Tampilkan Deret">
</form>
<?php
function checkPrimeNumber($number) {
  if ($number <= 1) {
      return false;
  }
  $i = 2;
  while ($i * $i <= $number) {
      if ($number % $i === 0) {
          return false;
      }
      $i++;
  }
  return true;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $counter = isset($_POST["counter"]) ? (int)$_POST["counter"] : 0;

    echo "<h3>Deret Genap:</h3>";
    $odd = '';
    for ($i = 1; $i <= $counter * 2; $i++) {
        if ($i % 2 === 0) {
            $odd .= $i . " ";
        }
    }
    echo '<input type="text" value="' . trim($odd) . '" readonly>';

    echo "<h3>Deret Prima:</h3>";
    $primeCount = 0;
    $number = 1;
    $primaResult = '';
    while ($primeCount < $counter) {
        if (checkPrimeNumber($number)) {
            $primaResult .= $number . " ";
            $primeCount++;
        }
        $number++;
    }
    echo '<input type="text" value="' . trim($primaResult) . '" readonly>';

    echo "<h3>Deret Fibonacci:</h3>";
    $fibonacci = [1, 1];
    $fibonacciResult = '';
    for ($i = 2; $i < $counter; $i++) {
        $nextFibonacci = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        array_push($fibonacci, $nextFibonacci);
    }
    foreach ($fibonacci as $number) {
        $fibonacciResult .= $number . " ";
    }
    echo '<input type="text" value="' . trim($fibonacciResult) . '" readonly>';
}

?>

</body>
</html>
