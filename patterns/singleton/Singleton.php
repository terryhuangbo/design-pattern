<?php

namespace Patterns\Singleton;

/**
 * Class Singleton.
 */
class Singleton
{
    /**
     * @var null|Singleton
     */
    private static $uniqueInstance = null;

    /**
     * Singleton constructor.
     *
     * @throws \Exception
     */
    private function __construct()
    {
    }

    /**
     * @return null|Singleton
     */
    public static function getInstance()
    {
        if (static::$uniqueInstance == null) {
            return static::$uniqueInstance = new static();
        }

        return static::$uniqueInstance;
    }

    /**
     * Other public method of the singleton.
     */
    public function otherMethod()
    {
        var_dump('I am other public method of singleton');
    }
}
