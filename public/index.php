<?php

use Framework\Http\Request;

require_once __DIR__ . '/../vendor/autoload.php';

### Initialization

//$request = (new Request())->setQueryParams($_GET)->setParsedBody($_POST);

$request = \Framework\Http\RequestFactory::fromGlobals(['name'=>'Test']);

### Action

$name = $request->getQueryParams()['name'] ?? 'Guest';
header('X-Developer: ElisDN');
echo 'Hello, ' . $name . '!';