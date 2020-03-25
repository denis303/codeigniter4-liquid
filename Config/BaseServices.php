<?php

namespace Denis303\Liquid\Config;

use Denis303\Liquid\LiquidService;
use Liquid\Liquid;

abstract class BaseServices extends \CodeIgniter\Config\Services
{

    public static function liquid($getShared = true)
    {
        if ($getShared)
        {
            return static::getSharedInstance(__FUNCTION__);
        }

        $config = config(Liquid::class);

        foreach(get_object_vars($config) as $key => $value)
        {
            Liquid::set($key, $value)
        }

        return new LiquidService;
    }

}