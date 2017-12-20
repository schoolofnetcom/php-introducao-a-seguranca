<?php

require __DIR__ . '/vendor/autoload.php';

$cursoId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$obj = new ErikFig\Cursos;

if (!$cursoId) {
    foreach ($obj->all() as $curso) {
        echo '<a href="cursos.php?id=' . $curso['id'] . '">' . $curso['title'] . '</a>';
    }
} else {
    echo $obj->get($cursoId)['title'];
}
