<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Model\Imc;

class ImcTest extends TestCase
{
    public function testGetImc()
    {
        $peso = 67;
        $altura = 1.60;
        $imc = new Imc($altura, $peso);

        $this->assertEquals($peso / ($altura * $altura), $imc->getImc());
    }

    public function testGetPeso()
    {
        $imc = new Imc();
        $this->assertEquals($imc->getPeso(), 0);
    }
    public function testGetAltura()
    {
        $imc = new Imc();
        $this->assertEquals($imc->getAltura(), 0);
    }
    public function testGetGrau()
    {
        $imc = new Imc();
        $this->assertFalse($imc->getGrau());

        $imc -> setAltura(1.60);
        $imc -> setPeso(30);
        $this->assertEquals("0", $imc->getGrau());

        $imc -> setAltura(1.60);
        $imc -> setPeso(60);
        $this->assertEquals("0", $imc->getGrau());

        $imc -> setAltura(1.60);
        $imc -> setPeso(67);
        $this->assertEquals("I", $imc->getGrau());

        $imc -> setAltura(1.60);
        $imc -> setPeso(80);
        $this->assertEquals("II", $imc->getGrau());

        $imc -> setAltura(1.60);
        $imc -> setPeso(100);
        $this->assertEquals("III", $imc->getGrau());
    }
    public function testGetClassificacao()
    {
        $imc = new Imc();
        $this->assertFalse($imc->getClassificacao());


        $imc -> setAltura(1.60);
        $imc -> setPeso(30);
        $this->assertEquals("Magreza", $imc->getClassificacao());

        $imc -> setAltura(1.60);
        $imc -> setPeso(60);
        $this->assertEquals("Normal", $imc->getClassificacao());

        $imc -> setAltura(1.60);
        $imc -> setPeso(67);
        $this->assertEquals("Sobrepeso", $imc->getClassificacao());

        $imc -> setAltura(1.60);
        $imc -> setPeso(80);
        $this->assertEquals("Obesidade", $imc->getClassificacao());

        $imc -> setAltura(1.60);
        $imc -> setPeso(80);
        $this->assertEquals("Obesidade Extrema", $imc->getClassificacao());
    }
}