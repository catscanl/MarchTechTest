<?php

// Gets the correct language file backed on browser locale
function getLangage($browserLocale) {

    // This is an array of available languages
    $languages = array(
        "en-GB" => "en",
        "en"    => "en",
        "cs-CZ" => "cs",
        "cs"    => "cs",
        "de-DE" => "de",
        "de"    => "de",
        "ru-RU" => "ru",
        "ru"    => "ru",
    );

    // Loops through languages looking for a matched locale
    foreach($languages as $key => $lang){
        if($key == $browserLocale){
            return $lang;
        }
    }

    // Loops through languages looking for a short/backup locale
    $browserShortLocale = substr($browserLocale, 0, 2);
    foreach($languages as $key => $lang) {
        if($key == $browserShortLocale){
            return $lang;
        }
    }

    // Found nothing so return default en
    return "en";
}

?>