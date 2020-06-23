<?php
header('Content-Type: application/json');
$content = file_get_contents('http://admin.holidayfinder.travelyo-cdn.site/api/deals');
echo $content;