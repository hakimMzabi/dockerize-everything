<?php
/**
 * Created by Théo Huchard
 * Filename: Singleton.php
 * Date: 1/18/2019
 * Time: 8:33 PM
 */

namespace App\Resources;


abstract class Singleton
{

    /**
     * Singleton constructor.
     */
    protected function __construct()
    {
    }

    /**
     * Return the instance of the called class.
     * @return mixed
     */
    final public static function instance()
    {
        static $instances = array();
        $calledClass = get_called_class();
        if (!isset($instances[$calledClass])) {
            $instances[$calledClass] = new $calledClass();
        }
        return $instances[$calledClass];
    }

    /**
     * To avoid cloning instances.
     */
    final private function __clone()
    {
    }
}