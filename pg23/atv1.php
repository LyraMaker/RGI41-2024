<?php

for ($x = 0; $x <= 120; $x++) {
    echo $x % 2 == 0 ? $x . "\n" : '';
}

for ($x = 0; $x <= 120; $x++) {
    if ($x % 2 == 0) {
        echo $x . "\n";
    }
}
