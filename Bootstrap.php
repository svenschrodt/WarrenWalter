<?php declare(strict_types = 1);
/**
 * Bootstrapping for namespace /WarrenWalter/ used by
 *  
 * - PHPUnit
 * - @ TODO configurable application namespace
 * 
 * @package P7Tools
 * @author Sven Schrodt<sven@schrodt-service.net>
 * @version 0.1
 * @since 2019-11-25
 * @link https://github.com/svenschrodt/WarrenWalter
 * @license https://github.com/svenschrodt/WarrenWalter/blob/master/LICENSE.md
 * @copyright Sven Schrodt<sven@schrodt-service.net>
 */

define('WW_NS', '\\WarrenWalter');
define('WW_LIB_DIR', 'WarrenWalter');

/**
 * SPL auto loading mechanism
 */
spl_autoload_register(function ($className) {
    
    // Getting parts of (sub) namespaces from URI    
    $parts = explode('\\', $className);
    
    // Check if namespace of class to be instantiated is belonging to us (P7Tools framework)
    if (substr($className, 0, 12) === WW_LIB_DIR) {
        $file = 'src/' . str_replace('\\', '/', $className) . '.php';

        // Check if destination class file exists
        if (file_exists($file)) {
            require_once $file;
        } else { // trow exception, if not
            throw new Exception(sprintf('Class file for %s not found!', $className));
        }
    }
    
    
});

