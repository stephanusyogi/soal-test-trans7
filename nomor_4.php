<!DOCTYPE html>
<html>
<head>
    <title>Trans 7 IT Department Test Session</title>
</head>
<body>

<h2>Soal Nomor 4 - Stephanus Yogi</h2>

<form method="post" action="">
    Jumlah angka: <input type="text" name="numCount">
    <input type="submit" name="run" value="Run">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numCount"])) {
    $numCount = (int)$_POST["numCount"];
    
    function processNumber($number) {
        if (($number % 3 == 0 || strpos($number, '3') !== false) && ($number % 3 == 0 && strpos($number, '3') !== false)) {
            return 'SEVEN'.'<br>';
        } elseif ($number % 3 == 0 || strpos($number, '3') !== false) {
            return 'TRANS'.'<br>';
        } else {
            return $number.'<br>';
        }
    }
    
    $oddNumbers = [];
    $number = 1;
    
    while (count($oddNumbers) < $numCount) {
        if ($number % 2 != 0) {
            $oddNumbers[] = processNumber($number);
        }
        $number++;
    }
    
    echo implode(" ", $oddNumbers);
}
?>

</body>
</html>
