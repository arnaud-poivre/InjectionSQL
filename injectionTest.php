<?php 
    declare(strict_types=1);
    use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

final class injectionTest extends TestCase
{
    public function injection_getMdp_DevraitAvoirUnSeulMdp() : void {
        //AAA
        //Ici l'injection fonctionne donc le test devrait etre faux.
    }

    public function correctionInjection_getMdp_DevraitAvoirUnSeulMdp() : void {
        //AAA
        //Correction de l'injection nous récuperons donc le mot de passe attendu et non tous les mots de passes de la table.
    }
}
?>
