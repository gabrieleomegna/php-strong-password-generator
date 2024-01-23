<?php

function generateCharsPool($letters, $uppercase, $numbers, $symbols){
    $lettersString = '';

    if ( $letters ){
        $lettersString .= 'qwertyuiopasdfghjklzxcvbnm';
    }

    if ( $uppercase && $letters ) {
        $lettersString .=  strtoupper($lettersString);
    }

    if ($numbers){
        $lettersString .= '1234567890';
    }

    if ($symbols){
        $lettersString .= '`~!@#$^&*()_-+={[}}|\:;".?,/';
    }

    return $lettersString;
}


function createPassword($length, $repeteadElements, $lettersPool = 'qwertyuiopasdfghjklzxcvbnmWERTYUIOPASDFGHJKLZXCVBNM'){
    if ($repeteadElements == false && strlen($lettersPool) < $length){
        return false;
    }

    if ($length > 32 || $length < 4){
        return false;
    }

    $password = '';

    // ? aggiungi finche' non raggiungo la dimensione voluta
    while( strlen($password) < $length){
        $randomLett = random_int(0, strlen($lettersPool) - 1);
        $password = $password . $lettersPool[$randomLett];

        if ($repeteadElements == false){
            $lettersPool = str_replace($lettersPool[$randomLett], '', $lettersPool );
        }
    }

    return $password;
}