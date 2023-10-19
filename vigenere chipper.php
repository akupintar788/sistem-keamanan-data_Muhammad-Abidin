<?php
if (isset($_POST['enkripsi'])) {
    $text = $_POST['text'];
    $shift = intval($_POST['shift']);
    $encryptedText = '';

    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if (ctype_alpha($char)) {
            $isLowerCase = ctype_lower($char);
            $code = ord($char);
            $shiftedCode = $code + $shift;
            $bound = $isLowerCase ? ord('z') : ord('Z');

            if ($isLowerCase && $shiftedCode > $bound) {
                $shiftedCode -= 26;
            } elseif (!$isLowerCase && $shiftedCode > $bound) {
                $shiftedCode -= 26;
            }

            $encryptedText .= chr($shiftedCode);
        } else {
            $encryptedText .= $char;
        }
    }

    echo $encryptedText;
} elseif (isset($_POST['dekripsi'])) {
    $text = $_POST['text'];
    $shift = intval($_POST['shift']);
    $decryptedText = '';

    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if (ctype_alpha($char)) {
            $isLowerCase = ctype_lower($char);
            $code = ord($char);
            $shiftedCode = $code - $shift;
            $bound = $isLowerCase ? ord('a') : ord('A');

            if ($isLowerCase && $shiftedCode < $bound) {
                $shiftedCode += 26;
            } elseif (!$isLowerCase && $shiftedCode < $bound) {
                $shiftedCode += 26;
            }

            $decryptedText .= chr($shiftedCode);
        } else {
            $decryptedText .= $char;
        }
    }

    echo $decryptedText;
}
?>