<?php declare(strict_types = 1);
/**
 *  \WarrenWalter\Math\Matrix 
 *  
 *  Class defininig representations of an matrix and calculations on it 
 *  
 *  @see https://en.wikipedia.org/wiki/Matrix_(mathematics)
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
     * Flag if current matrix is row vector (row matrix) - 1 row *x columns
     * 
     * @var bool
     */
    protected $isRowVector = false;

    
    /**
     * Flag if current matrix is column vector (column matrix) - x rows *1  column
     * 
     * @var bool
     */
    protected $isColumnVector = false;
    
    /**
     * Flag, if current matrix is a square matrix, meaning number of rows equals number of colums
     * 
     * @var bool
     */
    protected $isSquareMatrix;
    
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
     * Getter for number of rows of current matrix 
     * 
     * @return int
     */
    public function getNumberOfRows()
    {
        return $this->rows;
    }
    
    /**
     * Getter for number of rows of currentmatrix
     *
     * @return int
     */
    public function getNumberOfCols()
    {
        return $this->rows;
    }
    
    
    /**
     * Validation function for matrix input, checking:
     * 
     *    - correct dimension (same number of columns per line)
     * 
     * @param array $matrix
     */
    protected function validateInput(array $matrix)
    {
        $valid = true;
        $reason = '';
    
        // Is is a row vector ? 
        if(! is_array($matrix[0])) {
            $this->isRowVector = true;
            $this->rows = 1;
            $this->cols = count($matrix);
        } else {
            $this->rows = count($matrix);
            $this->cols = count($matrix[0]);
           
            // Is is a column vector ?            
           if($this->cols ==1) {
                $this->isColumnVector = true;
            }
        }
        
        // Is it a square matrix[Number of columns equals number of rows]?
        if($this->rows === $this->cols) {
            $this->isSquareMatrix = true;
        }
        // Checking each row for same number of columns
        for($c=0; $c < $this->rows;$c++) {
            if(count($matrix[$c]) !== $this->cols) {
                $valid = false;
                $reason = sprintf(Errors::MESSAGE_MATRIX_DIMENSION_INVALID, ' appeared in row ' . $c+1);
                // we are leavig current loop on 1st occurance of an error
                break;
            }
        }
        
        // Throw IAE exception on error
        if (!$valid) {
            throw new \InvalidArgumentException($reason);
        }
    }
    
    /**
     * Checking each value in current matrix, if it's numeric
     * 
     * @return bool
     */
    protected function checkAllValues() : bool
    {
        $valid = true;
        //@todo iterate over matrix an check for numeric value
        return $valid;
    }
    
}