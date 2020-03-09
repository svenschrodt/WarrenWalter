<?php declare(strict_types = 1);
/**
 *  \WarrenWalter\Math\Helper
 *  
 *  Class defininig mathematical functions for working with ann 
 *
 *  
 * @package WarrenWalter
 * @author Sven Schrodt<sven@schrodt-service.net>
 * @version 0.1
 * @since 19.02.2020
 * @link https://github.com/svenschrodt/WarrenWalter
 * @license https://github.com/svenschrodt/WarrenWalter/blob/master/LICENSE.md
 * @copyright Sven Schrodt<sven@schrodt-service.net>
 */
namespace WarrenWalter\Math;

class Helper 
{


    /**
     * Mathematical function having a characteristic 'S'- shaped ('sigmoid') curve
     * 
     * @param float $x
     * @return number
     */
    public function sigmoid(float $x) 
    {
        // Get value of Euler constant from built-in exp function 
        $e = exp(1);
        return 1 / (1 + pow($e, -1 * $x));
    }
    
}

// $foo = new Math();
// for ($i=-6;$i<6.1;$i+=0.1) {
//     printf("x: %f  :: y: %f %s", $i, $foo->sigmoid($i),PHP_EOL);
    
    
// }
