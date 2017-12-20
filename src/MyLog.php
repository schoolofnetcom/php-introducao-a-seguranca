<?php

namespace ErikFig;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\NativeMailerHandler;

class MyLog
{
    private $log;

    public function __construct(string $message, $level = 'warning')
    {
        $this->log = new Logger('school-of-net');
        $this->log->pushHandler(new StreamHandler(__DIR__.'/../logs/my-app.log'));
        $this->log->$level($message);
    }
}
