<?php

$senha = '123456';

$senha = password_hash($senha, PASSWORD_DEFAULT, [
    'cost' => 15
]);

var_dump($senha);

var_dump(password_verify('123456', $senha));
