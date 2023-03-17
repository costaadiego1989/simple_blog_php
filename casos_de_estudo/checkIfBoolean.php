<?php
    $iOlder = 18;

    if(is_bool($iOlder >= 18)) {
        echo "Você é maior de idade " . $iOlder;
    } else {
        echo "Você é menor de idade " . $iOlder;
    }
?>