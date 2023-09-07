<!DOCTYPE html>
<html>
<head>
  <title>Trans 7 IT Department Test Session</title>
</head>
<body>

<h2>Soal Nomor 2 - Stephanus Yogi</h2>

<form method="post" action="">
    Input: <input type="text" name="inputString">
    <input type="submit" name="submit" value="Proses">
</form>

<?php
function isPalindrome($str) {
    $str = strtolower(str_replace(' ', '', $str));
    $length = strlen($str);
    for ($i = 0; $i < $length / 2; $i++) {
        if ($str[$i] !== $str[$length - $i - 1]) {
            return false;
        }
    }
    return true;
}

function countConsonants($str) {
    $str = strtolower($str);
    $consonants = preg_replace('/[aeiou\s]/', '', $str);
    return strlen($consonants);
}

function countVowels($str) {
    $str = strtolower($str);
    $vowels = preg_replace('/[^aeiou]/', '', $str);
    return strlen($vowels);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = isset($_POST["inputString"]) ? $_POST["inputString"] : '';

    if (isPalindrome($inputString)) {
        echo "Kalimat \"$inputString\" termasuk palindrome<br>";
    } else {
        echo "Kalimat \"$inputString\" tidak termasuk palindrome<br>";
    }

    $numConsonants = countConsonants($inputString);
    $numVowels = countVowels($inputString);

    echo "Jumlah Konsonan: $numConsonants<br>";
    echo "Jumlah Vokal: $numVowels";
}
?>

</body>
</html>
