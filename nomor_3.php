<!DOCTYPE html>
<html>
<head>
    <title>Trans 7 IT Department Test Session</title>
</head>
<body>

<h2>Soal Nomor 3 - Stephanus Yogi</h2>

<form method="post" action="">
    Jumlah baris: <input type="text" name="rowCount">
    <input type="submit" name="run" value="Run">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["rowCount"])) {
    $rows = (int)$_POST["rowCount"];

    function generateFibonacci($n) {
      $fib = [];
      $fib[0] = 1;
      $fib[1] = 1;

      for ($i = 2; $i < $n; $i++) {
          $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
      }

      return $fib;
    }

    function printFibonacciPiramid($rows) {
      $fibonacci = generateFibonacci($rows * ($rows + 1) / 2);
      $counter = 0;

      for ($i = 0; $i < $rows; $i++) {
          for ($j = 0; $j <= $i; $j++) {
              echo $fibonacci[$counter] . " ";
              $counter++;
          }
          echo "<br>";
      }
    }
    printFibonacciPiramid($rows);
}
?>

</body>
</html>
