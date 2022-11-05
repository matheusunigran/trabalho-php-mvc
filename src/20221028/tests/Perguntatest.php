<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Model\Pergunta;

class PerguntaTest extends TestCase{
    public function testGetStatus(){
        $pergunta = new Pergunta();
        $status = "clear";
        $pergunta->setStatus($status);
        $this->assertEquals($status,$pergunta->getStatus());
    }
}

