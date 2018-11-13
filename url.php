<?php

$url = 'http://' . $_SERVER['SERVER_NAME'] .'?version=' . $_SERVER['REQUEST_URI'];

echo "<a href='url.php?version=0.0.1'>Version 0.0.1</a><br><a href='url.php?version=0.0.2'>Version 0.0.2</a><br><a href='url.php?version=0.0.3'>Version 0.0.3</a><br><a href='url.php?version=0.0.4'>Version 0.0.4</a><br><Br><br>";

if (strpos($url,'0.0.1') !== false) {
    echo 'Version 0.0.1';
} else if (strpos($url,'0.0.2') !== false) {
    echo 'Version 0.0.2';
} else if (strpos($url,'0.0.3') !== false) {
    echo 'Version 0.0.3';
} else if (strpos($url,'0.0.4') !== false) {
    echo 'Version 0.0.4';
} else if (strpos($url,'0.0.5') !== false) {
    echo 'Version 0.0.5';
} else{
    echo 'Unknown Version';
}
?>
