<?php

/**
 * aSearchWordTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class aSearchWordTable extends PluginaSearchWordTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object aSearchWordTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('aSearchWord');
    }
}