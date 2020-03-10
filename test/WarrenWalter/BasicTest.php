<?php

/**
 * Basic testing of PHPUnit's functionality
 * 
 * Used tmp. for quick and dirty testing
 * 
 * @todo --> test ==> src files
 * 
 * @link https://github.com/svenschrodt/P7Tools
 * @author Sven Schrodt<sven@schrodt-service.net>
 * @package P7Tools
 * @license https://github.com/svenschrodt/P7Tools/blob/master/LICENSE.md
 * @copyright Sven Schrodt<sven@schrodt-service.net>
 * @version 0.0.23
 */
class BasicTest extends \PHPUnit\Framework\TestCase
{

    protected $testContainer;

    public function testBasic()
    {
        $foo = new \WarrenWalter\Math\Helper();
        $this->assertInstanceOf('WarrenWalter\Math\Helper', $foo);
    }

    public function testMatrix()
    {
        $this->expectException('\ArgumentCountError');
        $foo = new \WarrenWalter\Math\Matrix();
    }
}


