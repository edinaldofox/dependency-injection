<?php


namespace Vox\Treinamento\Exercicio1;

use Vox\Treinamento\Exercicio1\ImpressoraFactory;

/**
 * Description of ImprimeFactory
 *
 * @author edinaldo <edinaldo@voxtecnologia.com.br>
 */
class ImprimeFactory extends ImpressoraFactory
{
    
    const A_QUATRO = 'A_QUATRO';
    const CUPOM_FISCAL = 'CUPOM_FISCAL';
    const TERMINAL = 'TERMINAL';


    public function imprimir($tipo)
    {
        switch ($tipo) {
            case self::A_QUATRO :
                return new ImprimeAQuatro();
            break;
            
            case self::CUPOM_FISCAL :
                return new ImprimeCupomFiscal();
            break;
            
            case self::TERMINAL :
                return new ImprimeTerminal();
            break;
        }
    }

}
