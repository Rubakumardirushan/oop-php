<?php

// Check if the function 'encrypt' does not exist before defining it
if (!function_exists('encrypt')) {
    function encrypt($text, $keyword) {
        $encrypted_text = '';
        $keyword_length = strlen($keyword);

        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i];
            $key_char = $keyword[$i % $keyword_length];
            $encrypted_char = chr(ord($char) + ord($key_char));
            $encrypted_text .= $encrypted_char;
        }

        return base64_encode($encrypted_text);
    }
}

// Check if the function 'decrypt' does not exist before defining it
if (!function_exists('decrypt')) {
    function decrypt($encrypted_text, $keyword) {
        $decrypted_text = '';
        $keyword_length = strlen($keyword);
        $encrypted_text = base64_decode($encrypted_text);

        for ($i = 0; $i < strlen($encrypted_text); $i++) {
            $char = $encrypted_text[$i];
            $key_char = $keyword[$i % $keyword_length];
            $decrypted_char = chr(ord($char) - ord($key_char));
            $decrypted_text .= $decrypted_char;
        }

        return $decrypted_text;
    }
}

// Example usage
$text = "Hello, world!";
$keyword = "secret1";

// Encrypt the text
$encrypted_text = encrypt($text, $keyword);
echo "Encrypted text: $encrypted_text <br>";

// Decrypt the text
$decrypted_text = decrypt($encrypted_text, "secret1");
echo "Decrypted text: $decrypted_text <br>";

?>
