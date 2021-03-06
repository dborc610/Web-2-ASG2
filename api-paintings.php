<?php
require_once 'config.inc.php';
require_once 'assignment2-db-classes.inc.php';

header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");

try {
    $conn = DatabaseHelper::createConnection(array(DBCONNSTRING, DBUSER, DBPASS));
    $gateway = new PaintingsDB($conn);
    if (isCorrectQueryStringInfo("galleryid")) {
        $paintings = $gateway->getGalleryPaintings($_GET["galleryid"]);
    }

    echo json_encode($paintings, JSON_NUMERIC_CHECK);
} catch (Exception $e) {
    die($e->getMessage());
}

function isCorrectQueryStringInfo($param)
{
    if (isset($_GET[$param]) && !empty($_GET[$param])) {
        return true;
    } else {
        return false;
    }
}
