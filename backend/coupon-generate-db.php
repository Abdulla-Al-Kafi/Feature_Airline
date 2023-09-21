<?php

    # Generating array of letters in order
    $letters = range('A', 'Z');

    # Array consisting of 3 random letters
    $rand_letter_index = array_rand($letters, 3);

    $code = "";

    # Appending random letter and number to $code 
    for ($i = 0; $i < 2; $i++){
        $code .= $letters[$rand_letter_index[$i]] . rand(0, 9);
    }
    # Appending a last random letter to $code
    $code .= $letters[$rand_letter_index[2]];

    header("location:../frontend/coupon-admin.php?code=$code");

?>