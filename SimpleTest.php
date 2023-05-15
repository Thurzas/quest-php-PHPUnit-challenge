<?php

require_once 'functions.php';

use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{
    public function testMySum(): void
    {
        //Arrange
        $firstValue = 5;
        $secondValue = 8;
        $expectedResult = 13;

        //Act
        $sum = mySum($firstValue, $secondValue);
        
        //Assert
        $this->assertSame($sum, $expectedResult, 
            "La fonction mySum() ne fonctionne plus :-("
        );
    }
}