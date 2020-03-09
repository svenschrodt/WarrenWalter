<?php declare(strict_types = 1);
/**
 *  \WarrenWalter\NeuralNetork
 *
 * Foundation class for an artificial neural network
 *
 * @package WarrenWalter
 * @author Sven Schrodt<sven@schrodt-service.net>
 * @version 0.1
 * @since 2020-01-24
 * @link https://github.com/svenschrodt/WarrenWalter
 * @license https://github.com/svenschrodt/WarrenWalter/blob/master/LICENSE.md
 * @copyright Sven Schrodt<sven@schrodt-service.net>
 */
namespace WarrenWalter;

class NeuralNetwork
{
    
    /**
     * Defining Array holdig number of nodes
     */
    
    protected $nodes =  [];    
    
    /**
     * Defining learning rate 
     * @var float;
     */
    
    protected $learningRate= 0.0;
    
    /**
     * Constructor function initializing anns 
     * 
     * @param int $inputNodes - number 
     * @param int $hiddeNodes
     * @param int $outputNodes
     * @param float $leaningRate
     */
    public function __construct(int $inputNodes, int $hiddeNodes, int $outputNodes, float $leaningRate)
    {
        $this->nodes['input'] = $inputNodes;
        $this->nodes['hidden'] = $hiddeNodes;
        $this->nodes['output'] = $outputNodes;
        $this->learningRate = $leaningRate;
    }
    
    
}
