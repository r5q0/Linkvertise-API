<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if (strpos($path, '/r=')) {
        $originalRequest = substr($path, 3);
        $randomNumber = rand(0, 1000);
        echo $randomNumber;
        $redirectUrl = 'https://linkvertise.com/USERID/' . $randomNumber . '/dynamic?r=' . $originalRequest;
        header('Location: ' . $redirectUrl, true, 302);
        exit();
    } else {
        http_response_code(404);
        header('Content-Type: text/plain');
        echo '404 Not Found';
    }
} else {
    http_response_code(405);
}
?>
d