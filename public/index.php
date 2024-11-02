<?php

use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$request = Illuminate\Http\Request::capture();

// Use the appropriate constant
$request->setTrustedProxies([], SymfonyRequest::HEADER_X_FORWARDED_FOR); // Update this line if necessary

$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);
