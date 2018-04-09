<?php
echo "<h1>lol</h1>";
$message = "<ul>";

for ($i = -17827 ; $i <= 14568 ; $i+= 7){
    if ($i % 24 == 0) {
        $message .= "<li>";
        $message .= $i;
        $message .= "<li>";
    }
}

$message = "<ul>";

echo $message;
