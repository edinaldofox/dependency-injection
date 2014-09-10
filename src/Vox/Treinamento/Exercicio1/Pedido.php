<?php

namespace Vox\Treinamento\Exercicio1;

use Easy\Collections\ArrayList;

/**
 * Description of Pedido
 *
 * @author edinaldo <edinaldo@voxtecnologia.com.br>
 */
class Pedido implements \SplSubject
{
    protected $produtos;
    protected $observadores;
    

    function __construct()
    {
        $this->produtos = new ArrayList();
        $this->observadores = new ArrayList();
    }
    
    public function getProdutos()
    {
        return $this->produtos;
    }

        
    public function addProduto(ProdutoInterface $produto)
    {
        $this->produtos->add($produto);
        return $this;
    }

    private function totalProduto()
    {
        $total = 0;
        
        foreach($this->produtos as $produto){
            $total += $produto->getValor();
        }
        
        return $total;
    }
    
    public function fecharPedido()
    {
        $this->notify();
    }

    public function attach(\SplObserver $observer)
    {
         $this->observadores->add($observer);
    }

    public function detach(\SplObserver $observer)
    {
        
    }

    public function notify()
    {
        foreach ($this->observadores as $observador) {
            $observador->update($this);
        }
    }

}
