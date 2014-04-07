<?php defined('SYSPATH') OR die('No direct script access.');

class Kohana extends Kohana_Core {

    /**
     * Tells whether Kohana is in Development environment
     *
     * @return bool
     */
    public static function is_development()
    {
        return Kohana::$environment == Kohana::DEVELOPMENT;
    }
}