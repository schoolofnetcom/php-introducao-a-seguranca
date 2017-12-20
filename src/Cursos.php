<?php

namespace ErikFig;

class Cursos
{
    private $data = [
        1 => [
            'id' => 1,
            'title'=>'Curso gratuito',
            'free'=>true
        ],
        2 => [
            'id' => 2,
            'title'=>'Curso premium',
            'free'=>false
        ]
    ];

    public function all()
    {
        $cursos = [];
        foreach ($this->data as $key => $curso) {
            if (!$curso['free']) continue;
            $cursos[$key] = $curso;
        }
        return $cursos;
    }

    public function get($id)
    {
        if (!$this->data[$id]['free']) {
            die('Curso não permitido');
        }
        return $this->data[$id];
    }
}
