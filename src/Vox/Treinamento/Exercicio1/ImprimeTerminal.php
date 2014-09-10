<?php

namespace Vox\Treinamento\Exercicio1;

/**
 * Description of ImprimeTerminal
 *
 * @author edinaldo <edinaldo@voxtecnologia.com.br>
 */
class ImprimeTerminal implements ImprimeInterface, \SplObserver
{
    public function imprimir(Pedido $pedido)
    {
        foreach ($pedido->getProdutos() as $produto) {
            echo $produto->getValor();
            echo PHP_EOL;
        }
    }

    public function update(\SplSubject $subject)
    {
        $this->imprimir($subject);
    }

}
