<?php
$bedrag = intval($argv[1]);

$geldeenheden = array(
    500,
    200,
    100,
    50,
    20,
    10,
    5,
    2,
    1,
);
$restbedrag = $bedrag;
foreach($geldeenheden as $value) {
    if ($restbedrag >= $value) {
        $aantalKeer = floor($restbedrag / $value);
        $restbedrag %= $value;
        echo "$aantalKeer X $value euro" . PHP_EOL;
    }
}
?>