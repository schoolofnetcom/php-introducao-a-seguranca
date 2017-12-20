<?php

namespace ErikFig;

class Request
{
    public function get(string $var, $validation = FILTER_DEFAULT)
    {
        $data = filter_input(INPUT_GET, $var, $validation);
        if (!$data) {
            die('Valor inválido');
        }
        return $data;
    }
}
