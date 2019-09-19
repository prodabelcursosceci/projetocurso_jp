<?php

//namespace Illuminate\Database\Schema;
namespace ProjetoCurso\app;
use Illuminate\Database\Schema\Blueprint;
use PhpParser\Builder\Class_;

Class Blueprint2 extends BluePrint {

    public function timestamps($precision = 0)
    {
        $this->timestamp('data_criacao', $precision)->nullable();

        $this->timestamp('data_atualizacao', $precision)->nullable();
    }
}
?>