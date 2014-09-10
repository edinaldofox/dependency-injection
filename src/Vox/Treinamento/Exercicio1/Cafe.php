<?php

namespace Vox\Treinamento\Exercicio1;
use Easy\Collections\ArrayList;

/**
 * Description of Cafe
 *
 * @author edinaldo <edinaldo@voxtecnologia.com.br>
 */
class Cafe implements ProdutoInterface
{
    protected $valor;
    protected $produtos;
    
    function __construct($valor)
    {
        $this->valor = $valor;
        $this->produtos = new ArrayList();
    }
    
    public function getValor()
    {
        return $this->valor;
    }

    public function getProdutos()
    {
        return $this->produtos;
    }
    
    public function total()
    {
        
    }
    
    public function addProduto(ProdutoInterface $produto)
    {
        $this->produtos->add($produto);
        return $this;
    }
    

}
