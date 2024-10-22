<?php

$PT = 0; $ST = 1;
echo "$PT,$ST,";

for($x=3;$x<=15;$x++){
    $TS = $PT + $ST;
    echo "$TS,";
    $PT = $ST;
    $ST = $TS;
}
