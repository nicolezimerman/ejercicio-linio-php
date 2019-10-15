<?php
use PHPUnit\Framework\TestCase;
include('ejercicio.php');

class Tests extends TestCase {
    
    public function testSinParametros() {
        $this->assertNotEmpty(armarString());
    }

    public function testContieneUnValor() {
        $this->assertContains('Linianos',armarString());
    }


    public function testConParametrosPositivos() {
        $this->assertNotEmpty(armarString(2,7,200));
    }

    public function testConParametrosNegativos() {
        $this->assertNotEmpty(armarString(-2,-7,200));
    }

}
?>