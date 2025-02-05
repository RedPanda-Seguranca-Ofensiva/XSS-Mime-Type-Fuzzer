<?php

$mime = $_GET["mime"];
$parser = $_GET["parser"];

header("X-Content-Type-Options: nosniff");
header("Content-Type: " . $mime);
header("Content-Disposition: inline");


if($parser === "html"){
    echo "<script>window.onload = () => {setTimeout(() => {window.parent.postMessage('Frame is executing JavaScript', '*');}, 1000);};</script>";
} else {
    echo "<x:script xmlns:x=\"http://www.w3.org/1999/xhtml\">window.onload = () => {setTimeout(() => {window.parent.postMessage('Frame is executing JavaScript', '*');}, 1000);};</x:script>";
}



?>
