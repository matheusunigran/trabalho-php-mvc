<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Model\Imc;

class ImcTest extends TestCase{
    public function testGetImc(){
        $peso = 85;
        $altura = 1.75;
        $imc = new Imc($altura,$peso);

        $this->assertEquals(peso/(altura*altura),$imc->getImc());

        $peso = 90;
        $altura = 1.85;
        $imc->setAltura($altura);
        $imc->setPeso($peso);

        $this->assertEquals(peso/(altura*altura),$imc->getImc());
    }
}