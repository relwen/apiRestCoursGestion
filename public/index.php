<?php
header("Access-Control-Allow-Origin: *");

require_once __DIR__ . '/../bootstrap/app.php';

$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function ($request, $response) {
    throw new HttpNotFoundException($request);
});
$app->run();
