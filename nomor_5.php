<!DOCTYPE html>
<html>
<head>
    <title>Vowel Encrypter & Decrypter</title>
</head>
<body>

<h2>Vowel Encrypter & Decrypter</h2>

<form method="post" action="">
    String: <input type="text" name="inputString">
    <input type="submit" name="encrypt" value="Encrypt">
    <input type="submit" name="decrypt" value="Decrypt">
</form>

<?php
function isVowel($char) {
    return in_array($char, ['a', 'i', 'u', 'e', 'o']);
}

function encryptVowels($string) {
  $primes = [2, 3, 5, 7, 11]; // prime numbers
  $vowels = ['a', 'i', 'u', 'e', 'o'];
  $encryptedString = '';
  $test = 0;
  for ($i = 0; $i < strlen($string); $i++) {
      $char = $string[$i];
      if (isVowel($char)) {
          $vowelIndex = array_search($char, $vowels);
          $shiftedIndex = ($vowelIndex + $primes[$test]) % 5;
          $encryptedString .= $vowels[$shiftedIndex];
          $test++;
      } else {
          $encryptedString .= $char;
      }
  }

  return $encryptedString;
}

function decryptVowels($encryptedString) {
  $primes = [2, 3, 5, 7, 11]; // prime numbers
  $vowels = ['a', 'i', 'u', 'e', 'o'];
  $decryptedString = '';
  $test = 0;
  for ($i = 0; $i < strlen($encryptedString); $i++) {
      $char = $encryptedString[$i];
      if (isVowel($char)) {
          $vowelIndex = array_search($char, $vowels);
          $originalIndex = ($vowelIndex + 5 - $primes[$test]) % 5;
          $decryptedString .= $vowels[$originalIndex];
          $test++;
      } else {
          $decryptedString .= $char;
      }
  }

  return $decryptedString;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["inputString"])) {
    $inputString = $_POST["inputString"];
    
    if (isset($_POST["encrypt"])) {
        $encrypted = encryptVowels($inputString);
        echo "Encrypted: $encrypted";
    } elseif (isset($_POST["decrypt"])) {
        $decrypted = decryptVowels($inputString);
        echo "Decrypted: $decrypted";
    }
}
?>

</body>
</html>
