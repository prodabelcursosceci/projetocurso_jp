<?php

namespace Illuminate\Database\Schema;

use Illuminate\Database\Schema\Blueprint as BaseBluePrint;
use PhpParser\Builder\Class_;

Class Blueprint extends BaseBluePrint {

    public function timestamps($precision = 0)
    {
        $this->timestamp('data_criacao', $precision)->nullable();

        $this->timestamp('data_atualizacao', $precision)->nullable();
    }
}
?>