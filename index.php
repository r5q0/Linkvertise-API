<?php

function getUrl ($url) {
    $userID = "992774"; // Your Linkvertise User ID
    $url = base64_encode($url);
    $linkversiteUrl = "https://linkvertise.com/$userID/545.746236706649/dynamic?r=$url&o=sharing";
    return $linkversiteUrl;
}


// Example
echo getUrl("https://www.youtube.com/watch?v=QglaLzo_aPk");