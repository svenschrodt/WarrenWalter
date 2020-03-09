<?php declare(strict_types = 1);
/**
 *  \WarrenWalter\Math\Matrix 
 *  
 *  Class defininig representations of matrices and calculations on it 
 *
 *  
 * @package WarrenWalter
 * @author Sven Schrodt<sven@schrodt-service.net>
 * @version 0.1
 * @since 2020-03-09
 * @link https://github.com/svenschrodt/WarrenWalter
 * @license https://github.com/svenschrodt/WarrenWalter/blob/master/LICENSE.md
 * @copyright Sven Schrodt<sven@schrodt-service.net>
 */
namespace WarrenWalter\Math;

class Matrix
{

    /**
     * Array with values of matrix 
     * 
     * @var array
     */
    protected $matrix = [];
    
    /**
     * Number of rows in current matrix
     * @var int
     */
    protected  $rows = 0;
    
    /**
     * Number of columns in current matrix
     * @var int
     */
    protected  $cols = 0;
    
    /**
     * Constructor function 
     * 
     * @param array $matrix
     */
    public function __construct(array $matrix) 
    {
       $this->matrix = $matrix;
        // Validate initial data of matrix
        $this->validateInput($matrix);
    }
    
    /**
     * Validation function for matrix input 
     * 
     * @param array $matrix
     */
    protected function validateInput(array $matrix)
    {
        $valid = true;
        $reason = '';
        //@todo checking dimensions of matrix
        print_r(count($matrix));       
        if (!$valid) {
            throw new \InvalidArgumentException('Invalid matrix input: ' . $reason);
        }
    }
}