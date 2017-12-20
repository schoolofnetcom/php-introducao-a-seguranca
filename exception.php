<?php

require __DIR__.'/vendor/autoload.php';

try {
    throw new \Exception('Você não poderia acessar este arquivo');
} catch (\Exception $e) {
    echo  'Erro interno do servidor: ' . $e->getMessage();
    new ErikFig\MyLog($e->getTraceAsString());
}
