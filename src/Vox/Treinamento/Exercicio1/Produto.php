<?php

namespace Vox\Treinamento\Exercicio1;

/**
 * Description of Produto
 *
 * @author edinaldo <edinaldo@voxtecnologia.com.br>
 */
abstract class Produto
{
    protected $valor;
    
    function __construct($valor)
    {
        $this->valor = $valor;
    }
    
    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

}
