<?php

require __DIR__ . '/vendor/autoload.php';

new ErikFig\MyLog('Boot do App', 'info');

$id = (new ErikFig\Request)->get('id', FILTER_VALIDATE_INT);
var_dump($id);

$message = (new ErikFig\Request)->get('message', FILTER_SANITIZE_SPECIAL_CHARS);
echo $message;
